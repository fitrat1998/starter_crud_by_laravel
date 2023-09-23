<x-layouts.main>
    <x-slot:title>
        Home
    </x-slot>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <!-- title -->
            <div class="row bg bg-success p-2 text-white">
                    <div class="col-sm-5">
                        <h2>Tasks <b>List</b></h2>
                    </div>
                    <div class="col-sm-7 d-flex justify-content-end">
                      
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning m-1" data-toggle="modal" data-target="#exampleModalCenter">
                          <i class="fa fa-plus"></i>Add new Task
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="text-dark">
                                    <i class="fa fa-list-check"></i> Task
                                </h1>
                               
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('') }}" method="POST">
                                    @csrf
                                    <hr />
                                    <div class="mb-3">
                                        
                                        <input type="text" class="form-control" name="task">
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add</button>
                              </div>
                            </div>
                          </div>
                        </div>
                     <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        
                      </div>
                    </div>
                        <a href="#" class="btn btn-danger m-1 p-1"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>                    
                    </div>
                </div>
            <!-- title -->

            <!-- main -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>                       
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#"><img src="/examples/images/avatar/1.jpg" class="avatar" alt="Avatar"> Michael Holz</a></td>
                        <td>04/10/2013</td>                        
                        <td>Admin</td>
                        <td><span class="status text-success" class = "active">&bull;</span> Active</td>
                        <td>
                            <a href="#" class=" text-success" ccc data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
                        </td>
                        <td>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
            <!-- main -->

            <!-- footer -->
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                   
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
            <!-- footer -->
            
        </div>
    </div>
</div>

</x-layouts.main>
