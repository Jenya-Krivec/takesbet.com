<div class="list-disc pl-5 my-4">
    <ol class="list-disc pl-5 my-4">
    <?php $count = count($bookmaker['payments']) >= 16 ? 16 : count($bookmaker['payments']); ?>
    @for($i = 0; $i < $count; $i++)
        <li class="text-base text-gray-700">{{$bookmaker['payments'][$i]['name']}}</li>
    @endfor
    </ol>
</div>
