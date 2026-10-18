<div class="form-grid">
<div class="form-group"><label for="student_id">Student ID</label><input id="student_id" name="student_id" maxlength="30" required></div>
<div class="form-group"><label for="email">Email Address</label><input id="email" name="email" type="email" required></div>
<div class="form-group"><label for="first_name">First Name</label><input id="first_name" name="first_name" maxlength="100" required></div>
<div class="form-group"><label for="last_name">Last Name</label><input id="last_name" name="last_name" maxlength="100" required></div>
<div class="form-group"><label for="course">Course / Program</label><input id="course" name="course" maxlength="100" required></div>
<div class="form-group"><label for="year_level">Year Level</label><select id="year_level" name="year_level" required><option value="">Select year level</option>@for($year=1;$year<=6;$year++)<option value="{{ $year }}">Year {{ $year }}</option>@endfor</select></div>
</div>