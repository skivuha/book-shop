
  {{ stylesheet_link("css/index/validation.css") }}
  <div class="container">    
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="./book-shop/account/login">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                          {{ flashSession.output() }}
                        {%if errors is empty === false%}
                            
                            {% for message in errors %}
                                {{ flashSession.warning(message) }}
                                {{ flashSession.output() }}
                            {% endfor%}
                            {%endif%}
                            <form id="signupform" class="form-horizontal" method='post' action='./book-shop/account/registration'>
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ nameField }}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{ emailField }}" >
                                    </div>
                                </div>                                    
                                
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                    
                               <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password* (Confirm)</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confirmPassword" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">                                       
                                          <input id="btn-signup" class="btn btn-info" type='submit' value=' Sign Up'>
                                    </div>
                                </div>                              
                      
                            </form>
                         </div>
                    </div>

         </div>
         </div>
         
           {{ javascript_include("js/index/validation.js") }}
