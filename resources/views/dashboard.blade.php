<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <?php
                $month_day= date("t");
                echo "<table border =\"1\" style='border-collapse: collapse' width='100%'>";
                for ($row=0; $row <= 10; $row++) {
                    echo "<tr> \n";
                    for ($col=0; $col <= $month_day; $col++) {
                        if ($row==0 && $col==0){
                            echo "<td width='10%'>Room/Day </td> \n";
                        }
                        else{
                            if ($col==0){
                                echo "<td width='10%'>Room No: $row</td> \n";
                            }
                            else {
                                if ($row==0){
                                    echo "<td width='2%'>$col</td> \n";
                                }
                                else{
                                    echo "<td width='2%'>1</td> \n";
                                }

                            }
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
</x-app-layout>
