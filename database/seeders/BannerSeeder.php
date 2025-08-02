<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Verificar se o arquivo de banner padrão existe
        $originalPath = public_path('img/util/banner.png');
        
        if (File::exists($originalPath)) {
            // Criar diretório de banners se não existir
            Storage::disk('public')->makeDirectory('banners');
            
            // Copiar o arquivo padrão para o storage
            $newPath = 'banners/banner-padrao.png';
            Storage::disk('public')->put($newPath, File::get($originalPath));
            
            // Criar o registro no banco
            Banner::create([
                'title' => 'Banner Principal Bocayuva Tintas',
                'image_path' => $newPath,
                'link_url' => 'https://wa.link/cb4pu6',
                'is_active' => true,
                'order' => 0
            ]);
            
            $this->command->info('Banner padrão criado com sucesso!');
        } else {
            $this->command->warn('Arquivo de banner padrão não encontrado em: ' . $originalPath);
        }
    }
}
