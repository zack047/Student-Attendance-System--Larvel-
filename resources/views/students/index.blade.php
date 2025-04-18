<h2>Students List</h2>
@foreach($students as $student)
  <p>{{ $student->name }} - {{ $student->class }}</p>
@endforeach
