            <!-- Tittle-->
            <div class="col-lg-8 pb-5">
                <div class="account-details">
                    <div class="wizard-body">
                        <h3 class="h5 block-title mb-4">My Books</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    
                                    <tr>
                                        <th>#</th>
                                        <th>Book Name</th>
                                        <th>Author</th>
                                        <th>Date of purchase</th>
                                        <th>Price(৳)</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($vars as $orderDetail)

                                        <tr>
                                            <th scope="row"> {{ $loop->iteration }} </th>
                                            <td> {{ $orderDetail->book->title }} </td>
                                            <td> {{ implode(', ', $orderDetail->book->authorList()) }} </td>
                                            <td> {{ date('M d, Y', strtotime($orderDetail->created_at)) }} </td>
                                            <td> {{ $orderDetail->price }} </td>
                                        </tr>
                                        
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
    
    
    
    
    
    
            </div>
