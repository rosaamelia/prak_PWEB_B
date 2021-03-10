<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>
    </title>
    </head>
    <body>
        <?php
        // melakukan perualangan "hello world" sebanyak 5 kali 
        for ($i=0; $i<5;$i++){
            echo '<h1>Hllo World</h1>';
        }
        ?>
    <?php for ($i =0; $i<5; $i++):?>
            <?php if($i % 2 ===0):?>
            <h2>hello world</h2>
        <?php else :?>
            <h1>hello world</h1>
        <?php endif ;?>
    <?php endfor;?>
    
    <?php
    $mhs = ['Dewangga','25','2132435434']
    ?>
    <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>usia</th>
                    <th>nim</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=$mhs[0];?></td>
                    <td><?=$mhs[1];?></td>
                    <td><?=$mhs[2];?></td>
                </tr>
            </tbody>
    </table>
    <?php
    $mhas = [[
        'nama'=>'Dewangga',
        'nim'=>'2132435434'
        ]]
    ?>

<table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>usia</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach($mhas as $mhss ):?>
                <tr>
                    
                    <td><?= $mhss['nama'];?></td>
                    <td><?= $mhss['nim'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>
    <?php
    $makanan = ['mie ayam','donat'];
    switch ($makanan[0]){
        case 'burger':
            echo 'di index 0 ada burger';
            break;
        case 'mie ayam':
            echo 'di index 0 ada mie ayam';
            break;
        default:
            echo 'test';
            break;
    }
    ?>
    </body>
</html>
