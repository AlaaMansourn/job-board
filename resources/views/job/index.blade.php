<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

    <h1>Job Board</h1>

    @foreach($jobs as $job)


    <div> {{$job['title']}}:{{$job['salary']}}</div>





    @endforeach




</div>
