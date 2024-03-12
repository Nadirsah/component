<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<x-admin.layouts.card class='w-50 mx-auto mt-5'>
    <x-slot name="title">
        Elave et
    </x-slot>
    <x-slot name="content">
        <form action="" method="post" class="w-100 text-start">
            <!-- <div class="mt-3">
                <label for="name">Meqale adi</label>
                <input type="text" name="name" id="name" placeholder="yazin" class="form-control">
            </div> -->
            <x-admin.elements.input 
            :labelClasses="'text-danger'" 
            :id="'name'" 
            :name="'name'" 
            :inputClasses="'name'"
            :placeholder="'Meqale adi'" 
            :isDisabled="'false'" 
            :defaultValue="'test'" 
            :type="'text'"
            :parentclass="''">
                <x-slot:label>
                    Meqale adi geldi
                </x-slot:label>
            </x-admin.elements.input>

            <div class="mt-3">
                <label for="category" class="mb-2">Kategoriya</label>
                <select name="category" id="category" class="form-control">
                    <option value="-1">Kategoriya secin</option>
                    <option value="1">PHP</option>
                    <option value="2">C#</option>
                </select>
            </div>

            <div class="mt-3">
                <label for="content">Meqale adi</label>
                <textarea name="content" id="content" placeholder="yazin" class="form-control" cols="30"
                    rows="10"></textarea>
            </div>

            <div class="mt-3">
                <input type="checkbox" name="status" id="status" class="me-3">
                <label for="status" class="mb-2">Meqale gonderilsin?</label>
            </div>

            <hr>

            <div class="mt-3">
                <input type="submit" id="btnsave" class="btn btn-success w-100" value="Kaydet">
            </div>

        </form>
    </x-slot>
    <x-slot name="footer">
        Lorem ipsum dolo.
    </x-slot>
</x-admin.layouts.card>