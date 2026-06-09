<?php
$eventItems = [
    'eventOne'    => ['eventName' => 'Coffee & Conversation Practice',    'address'   => 'Rotlintstraße 43, 60316 Frankfurt am Main, Germany',    'date'  =>  '10.2.2026',    'day' => 'Tues',    'time'  => '13:30 - 15:00'],
    'eventTwo'    => ['eventName' => 'Coffee & Conversation Practice',    'address'   => 'Rotlintstraße 43, 60316 Frankfurt am Main, Germany',    'date'  =>  '10.2.2026',    'day' => 'Tues',    'time'  => '13:30 - 15:00'],
    'eventThree'    => ['eventName' => 'Coffee & Conversation Practice',    'address'   => 'Rotlintstraße 43, 60316 Frankfurt am Main, Germany',    'date'  =>  '10.2.2026',    'day' => 'Tues',    'time'  => '13:30 - 15:00'],
    'eventFour'    => ['eventName' => 'Coffee & Conversation Practice',    'address'   => 'Rotlintstraße 43, 60316 Frankfurt am Main, Germany',    'date'  =>  '10.2.2026',    'day' => 'Tues',    'time'  => '13:30 - 15:00'],
    'eventFive'    => ['eventName' => 'Coffee & Conversation Practice',    'address'   => 'Rotlintstraße 43, 60316 Frankfurt am Main, Germany',    'date'  =>  '10.2.2026',    'day' => 'Tues',    'time'  => '13:30 - 15:00'],
    'eventSix'    => ['eventName' => 'Coffee & Conversation Practice',    'address'   => 'Rotlintstraße 43, 60316 Frankfurt am Main, Germany',    'date'  =>  '10.2.2026',    'day' => 'Tues',    'time'  => '13:30 - 15:00'],
];
?>

<?php if (!empty($eventItems)): ?>
    <?php foreach ($eventItems as $key => $item): ?>
        <div class="card w-100 mb-2">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($item['date']) ?>, <?= htmlspecialchars($item['day']) ?></h6>
                <h5 class="card-title"><?= htmlspecialchars($item['eventName']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($item['address']) ?></p>
                <p class="card-text"><?= htmlspecialchars($item['time']) ?></p>
                <button class="btn btn-primary">RSVP now</button>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p class="text-muted mb-0">No events, please check again later!</p>
<?php endif; ?>