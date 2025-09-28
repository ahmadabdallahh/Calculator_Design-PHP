<div class="calculator-design">
    <div class="container w-50">
        <div class="mt-4">
            <h2 class="bg-primary rounded p-2 text-light">Calculator</h2>
        </div>

        <!-- Form Inputs -->
        <form action="./Includes/calc-logic.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Number One</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="num-1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Number Two</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="num-2">
            </div>

            <!-- Operations (Radio Type) -->
            <div class="operations d-flex gap-4 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="add" value="add">
                    <label class="form-check-label" for="add">
                        Add
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="subtract" value="subtract"
                        checked>
                    <label class="form-check-label" for="subtract">
                        Subtract
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="multiply" value="multiply">
                    <label class="form-check-label" for="multiply">
                        Multiply
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operation" id="divide" value="divide">
                    <label class="form-check-label" for="divide">
                        Divide
                    </label>
                </div>
            </div>

            <!-- Sumbit Data -->
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
</div>
