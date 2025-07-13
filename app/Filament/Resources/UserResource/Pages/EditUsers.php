<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class EditUsers extends Page
{
    protected static string $resource = UserResource::class;

    protected static string $view = 'filament.resources.user-resource.pages.edit-users';
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    // Properti ini akan menampung data dari form
    public ?array $data = [];
    protected ?Model $record;

    // Method ini akan dijalankan saat halaman pertama kali dimuat
    public function mount(): void
    {
        // Kita ambil data profil pertama, atau buat baru jika belum ada
        // Ini adalah logika yang benar untuk halaman profil tunggal
        $this->record = User::firstOrCreate(['id' => 1]);

        // Isi form dengan data dari database
        $this->form->fill($this->record->attributesToArray());
    }

    // Method ini mendefinisikan struktur form
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nama Lengkap'),

                Textarea::make('bio')
                    ->required()
                    ->label('Bio Singkat'),

                FileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->directory('profile-photos')
                    ->label('Foto Profil'),

                TagsInput::make('skills')
                    ->label('Keahlian (Skills)')
                    ->placeholder('Tambah keahlian baru'),

                KeyValue::make('social_media')
                    ->label('Link Media Sosial')
                    ->keyLabel('Platform (misal: LinkedIn)')
                    ->valueLabel('URL Lengkap'),
            ])
            ->statePath('data')
            ->model($this->record);
    }

    // Method ini akan dijalankan saat tombol "Simpan" ditekan
    public function save(): void
    {
        try {
            $data = $this->form->getState();
            $this->record->update($data);

            Notification::make()
                ->title('Profil berhasil disimpan')
                ->success()
                ->send();

        } catch (\Exception $e) {
            Notification::make()
                ->title('Gagal menyimpan profil')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }

    // Method ini mendefinisikan tombol aksi di halaman
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Perubahan')
                ->submit('save'),
        ];
    }

}
