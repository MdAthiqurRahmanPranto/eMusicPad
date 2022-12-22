@extends('frontend.master')
@section('contents')

<style>
    @media print{
        body *:not(#printableArea):not(#printableArea *){
            visibility: hidden;
        }
    #printableArea{
        position: absolute;
        visibility: visible;
    }
    }
</style>



<div class="container mt-5" id="printableArea">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded" >
                <div class="row">
                    <div class="col-md-6" >
                        <h1 class="text-uppercase">Invoice</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Billed:</span><span class="ml-1">{{ $invoice->name }}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Band:</span><span class="ml-1">{{ $invoice->band }}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Transaction ID:</span><span class="ml-1">{{ $invoice->transaction_id }}</span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0">OMPBMS</h4><span>www.OMPBMS.com</span></div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pad Center</th>
                                    <th>Slots</th>
                                    <th>Payment</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $invoice->padcenterRelation[0]->name }}</td>
                                    <td>{{ $invoice->schedhule}}</td>
                                    <td> {{ $invoice->padcenterRelation[0]->price }}</td>
                                    <td> {{ $invoice->padcenterRelation[0]->price }}</td>
                                   
                                </tr>
                                
                                @foreach ($bookingdetails as $item)
                                <tr>
                                    <td>{{ $item->instruments[0]->name }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $item->instruments[0]->price }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                               
                                
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Total</td>
                                    <td>{{ $invoice->payment }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-right mb-3">
                    <button onclick="window.print()" class="btn btn-danger btn-sm mr-5" type="button">Print</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
  </script> --}}

@endsection