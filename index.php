<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
    
</style>

<?php 

    $file = file_get_contents('https://www.worldometers.info/coronavirus/country/turkey/');

    preg_match_all('
    /<span>(.*?)<\/span>/', 
    $file, 
    $maches);

    preg_match_all('/<span style=(.*?)>(.*?)<\/span>/', $file, $maches2);

    preg_match_all('/<div class="number-table-main">(.*?)<\/div>/', $file, $maches3);


    
    
    $getDeathCount      = $maches[0][0] . "<br>";
    $getRecoveredCount  = $maches[0][1];
    $getCasesCount      = $maches2[0][1];
    $getActiveCases     = $maches3[1][0];
    $getCloseCases      = $maches3[1][1];


?>



    <section>




    <div class="container mt-2">

        <h2 class="text-center">Türkiye Koronavirüs Bilgilendirme Tablosu</h2>


        <div class="row mt-5 justify-content-between">

            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Toplam Ölüm Sayısı</h5>
                    <p class="card-text text-center">
                        <?= $getDeathCount; ?>
                    </p>
                </div>
            </div>


            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Toplam Vaka Sayısı</h5>
                    <p class="card-text text-center">
                        <?= $getCasesCount; ?>
                    </p>
                </div>
            </div>


            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Toplam İyileşen Sayısı</h5>
                    <p class="card-text text-center ">
                        <?= $getRecoveredCount; ?>
                    </p>
                </div>
            </div>

            

        </div>

        <div class="row mt-2 justify-content-evenly">

                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Aktif Vaka Sayısı</h5>
                        <p class="card-text text-center ">
                            <?= $getActiveCases; ?>
                        </p>
                    </div>
                </div>


                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kapalı Vaka Sayısı</h5>
                        <p class="card-text text-center ">
                            <?= $getCloseCases; ?>
                        </p>
                    </div>
                </div>














        </div>



        </div>








    </section>



    