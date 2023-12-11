<x-edit-layout>
    <form action="{{ route('section.update', ['id' => $sections->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Section Name<span class="star">*</span></label>
            <div class="input_container">
                <input type="text" name="name" value="{{ $sections->name }}" required>
            </div>
        </div>
        <div>
            <div class="form-group">
                <label for="Choose Section Type">Choose Section Type<span class="star">*</span></label>
                <div class="input_container">
                    <select name="type" class="form-control">
                        <option value="optional">Optional</option>
                        <option value="compulsory">Compulsory</option>
                    </select>
                </div>
            </div>
        </div>
        <label for="">Grade<span class="star">*</span></label>
        <div class="input_container">
            <select name="grade_id">
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                @endforeach
            </select>
        </div>
        <label for="">Teacher<span class="star">*</span></label>
        <div class="input_container">
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Update</button>

    </form>

</x-edit-layout>
