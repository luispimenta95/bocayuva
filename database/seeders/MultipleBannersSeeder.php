<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MultipleBannersSeeder extends Seeder
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
            
            // Criar múltiplos banners para demonstração
            $banners = [
                [
                    'title' => 'Banner Principal - Bocayuva Tintas',
                    'file' => 'banner-principal.png',
                    'link' => 'https://wa.link/cb4pu6',
                    'order' => 0
                ],
                [
                    'title' => 'Banner Secundário - Ofertas Especiais',
                    'file' => 'banner-ofertas.png',
                    'link' => 'https://wa.link/cb4pu6',
                    'order' => 1
                ],
                [
                    'title' => 'Banner Terceiro - Marcas Parceiras',
                    'file' => 'banner-marcas.png',
                    'link' => '#portfolio',
                    'order' => 2
                ]
            ];
            
            foreach ($banners as $bannerData) {
                // Copiar o arquivo padrão com um novo nome
                $newPath = 'banners/' . $bannerData['file'];
                Storage::disk('public')->put($newPath, File::get($originalPath));
                
                // Criar o registro no banco
                Banner::create([
                    'title' => $bannerData['title'],
                    'image_path' => $newPath,
                    'link_url' => $bannerData['link'],
                    'is_active' => true,
                    'order' => $bannerData['order']
                ]);
            }
            
            $this->command->info('Múltiplos banners criados com sucesso!');
        } else {
            $this->command->warn('Arquivo de banner padrão não encontrado em: ' . $originalPath);
        }
    }
}
