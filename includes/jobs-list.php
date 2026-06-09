<?php
$jobItems = [
    'jobOne'    => ['jobName' => 'Language Teacher',    'description'   => 'Certified and experienced teachers only. Being a native speaker does not qualify as expertise.',    'skills'  =>  'English, French, Chinese, and Japanese.'],
    'jobTwo'    => ['jobName' => 'Computer Assistant (Part-time)',    'description'   => 'provide IT support, work with web design. Good powerpoint and excel skills.',    'skills'  =>  'Fluent English, knowledge of German and other languages helpful.'],
    'jobThree'    => ['jobName' => 'Office manager (Part time or Full-time)',    'description'   => 'Compose newsletters, respond to surveys, coordinate housing program, organize conferences, assist with social and sports activities, proctor exams, general administration.',    'skills'  =>  'Fluent German and English (written and spoken), other languages helpful; good communicator, strong organizational and analytical skills.'],
]
?>

<?php foreach ($jobItems as $key => $item): ?>
<div class="card w-100 mb-2">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h5 class="card-title"><?= htmlspecialchars($item['jobName']) ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($item['skills']) ?></h6>
                <p class="card-text">Jobscope: <?= htmlspecialchars($item['description']) ?></p>
            </div>
            
            <div class="col-2 text-right"><button class="btn btn-primary">Apply here</button></div>
        </div>
    </div>
</div>
<?php endforeach; ?>