@extends('layouts.app')

@section('content')
<div class="container">
<section class="content">
	<div class="row">
		<!-- BEGIN NAV TICKET -->
		<div class="col-md-3">
			<div class="grid support">
				<div class="grid-body">
					<h2>Browse</h2>
					
					<hr>
					
					<ul>
						
						<li><a href="#">Your Tickets<span class="pull-right">52</span></a></li>
						<li><a href="#">Mentioning you<span class="pull-right">18</span></a></li>
					</ul>
					
					<hr>
					
					<p><strong>Labels</strong></p>
					<ul class="support-label">
						<li><a href="#"><span class="bg-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;application<span class="pull-right">2</span></a></li>
						<li><a href="#"><span class="bg-red">&nbsp;</span>&nbsp;&nbsp;&nbsp;css<span class="pull-right">7</span></a></li>
						<li><a href="#"><span class="bg-yellow">&nbsp;</span>&nbsp;&nbsp;&nbsp;design<span class="pull-right">128</span></a></li>
						<li><a href="#"><span class="bg-black">&nbsp;</span>&nbsp;&nbsp;&nbsp;html<span class="pull-right">41</span></a></li>
						<li><a href="#"><span class="bg-light-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;javascript<span class="pull-right">22</span></a></li>
						<li><a href="#"><span class="bg-green">&nbsp;</span>&nbsp;&nbsp;&nbsp;management<span class="pull-right">87</span></a></li>
						<li><a href="#"><span class="bg-purple">&nbsp;</span>&nbsp;&nbsp;&nbsp;mobile<span class="pull-right">92</span></a></li>
						<li><a href="#"><span class="bg-teal">&nbsp;</span>&nbsp;&nbsp;&nbsp;php<span class="pull-right">140</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END NAV TICKET -->
		<!-- BEGIN TICKET -->
		<div class="col-md-9">
			<div class="grid support-content">
				 <div class="grid-body">
					 <h2>Issues</h2>
					 
					 <hr>
					 
					 <div class="btn-group">
						<button type="button" class="btn btn-default active">162 Open</button>
						<button type="button" class="btn btn-default">95,721 Closed</button>
					</div>
					 
					 <div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Sort: <strong>Newest</strong> <span class="caret"></span></button>
						<ul class="dropdown-menu fa-padding" role="menu">
							<li><a href="#"><i class="fa fa-check"></i> Newest</a></li>
							<li><a href="#"><i class="fa"> </i> Oldest</a></li>
							<li><a href="#"><i class="fa"> </i> Recently updated</a></li>
							<li><a href="#"><i class="fa"> </i> Least recently updated</a></li>
							<li><a href="#"><i class="fa"> </i> Most commented</a></li>
							<li><a href="#"><i class="fa"> </i> Least commented</a></li>
						</ul>
					</div>
					
					<!-- BEGIN NEW TICKET -->
					<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#newIssue">New Issue</button>
					<div class="modal fade" id="newIssue" tabindex="-1" role="dialog" aria-labelledby="newIssue" aria-hidden="true">
						<div class="modal-wrapper">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-blue">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title"><i class="fa fa-pencil"></i> Create New Issue</h4>
									</div>
									<form action="{{ route( 'ticket.user' ) }}" method="post">
										@csrf
										<div class="modal-body">
											<div class="form-group">
												<input name="subject" type="text" class="form-control" required placeholder="Subject">
											</div>
											<div class="form-group">
												<input name="department" type="text" class="form-control" placeholder="Department">
											</div>
											<div class="form-group">
												<textarea name="description" class="form-control" required placeholder="Please detail your issue or question" style="height: 120px;"></textarea>
											</div>
											<div class="form-group">
												<input type="file" name="attachment">
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
											<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Create</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- END NEW TICKET -->
					 
					<div class="padding"></div>
					 
					<div class="row">
						<!-- BEGIN TICKET CONTENT -->
						<div class="col-md-12">
							<ul class="list-group fa-padding">
								
								@foreach ($tickets as $ticket)
								

								<li class="list-group-item" data-toggle="modal" data-target="#issue-{{ $ticket->id }}">
									<div class="media">
										<i class="fa fa-cog pull-left"></i>
										<div class="media-body">
											<strong>{{ $ticket->subject }}</strong> <span class="label label-danger">{{ ucFirst($ticket->priority) }}</span><span class="number pull-right"># 13698</span>
											<p class="info">Opened by <a href="#">{{ $ticket->user->name }}</a> {{ $ticket->created_at->diffForHumans() }} <i class="fa fa-comments"></i> <a href="#">2 comments</a></p>
										</div>
									</div>
								</li>
								
								@endforeach
							</ul>
							
							<!-- BEGIN DETAIL TICKET -->
							 @foreach($tickets as $ticket)
							<div class="modal fade" id="issue-{{ $ticket->id }}" tabindex="-1" role="dialog" aria-labelledby="issue" aria-hidden="true">
								<div class="modal-wrapper">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header bg-blue">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title"><i class="fa fa-cog"></i> Add drag and drop config import closes</h4>
											</div>
											
												<div class="modal-body">
													<div class="row">
														<div class="col-md-2">
															<img src="assets/img/user/avatar01.png" class="img-circle" alt="" width="50">
														</div>
														<div class="col-md-10">
															<p>Issue <strong>#13698</strong> opened by <a href="#">{{ $ticket ->user->name }}</a> {{ $ticket ->created_at->diffForHumans() }}</p>
															<p>{{ $ticket -> description }}</p>
														</div>
													</div>

													@foreach($ticket->messages as $message)
													<div class="row support-content-comment">
														<div class="col-md-2">
															<img src="assets/img/user/avatar02.png" class="img-circle" alt="" width="50">
														</div>
														<div class="col-md-10">
															<p>Posted by <a href="#">{{ $message->user->name }}</a> on {{ $message->created_at->diffForHumans() }}</p>
															<p>{{ $message->message }}</p>
															<a href="#"><span class="fa fa-reply"></span> &nbsp;Post a reply</a>
														</div>
													</div>
													@endforeach

													{{-- Reply box --}}
                    @if($ticket->status !== 'closed')
                    <hr>
                    <form action="{{ route('ticket.message', $ticket->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="3" placeholder="Type your reply..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-reply"></i> Send Reply
                        </button>
                    </form>
                    @else
                    <p class="text-muted text-center"><i class="fa fa-lock"></i> This ticket is closed.</p>
                    @endif
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
												</div>
											
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- END DETAIL TICKET -->
						</div>
						<!-- END TICKET CONTENT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END TICKET -->
	</div>
</section>
</div>


@endsection