<?php
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'Online Registration System';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Hurray!! Welcome Again</h1>

        <p class="lead">Hope you will enjoy today lessons!!</p>

        <p><a class="btn btn-lg btn-success" href="\basic\views\Semester II_Teaching_Timetable_FirstDraft.pdf">Check Out your time table</a></p>
        <p><a class="btn btn-lg btn-success" href="\basic\views\Assignment Control Structures_NEW.pdf">TANGAZO (DOCUMENT) </a></p>
        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['/student/create']); ?>">Sign As student</a></p>

    </div>

    <div class="body-content">
    

        <!-- <div class="col">
            <!-- <div class="col-lg-4 mb-3">
                <h2>Quck notes fram last lecturer</h2>

                <p>Today kutakua na PRESENTATION
                    ,Muwahi mapema
                </p>

                
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Few words from Cr Dory</h2>

                <p>Leooo kutakua na presentation mje na pc zenu.</p>

                
            </div> -->
            
            
        </div> -->

    </div>
</div>

