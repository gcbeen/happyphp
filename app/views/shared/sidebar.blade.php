@include('shared.links')
<!--
<% if current_user.nil? %>
	<%= render "devise/shared/links" %>
	<%= render partial: 'layouts/shared/omniauth_link' %>
<% else %>
    <% if params[:action] == 'change_info' %>
  	<div class='box'>
 		<%= image_tag(current_user.avatar || current_user.gravatar_url(rating: 'R', secure: true), width: '50px', height: '50px') %>
  	修改头像请进入<a href='http://gravatar.com'>gravatar.com</a>
     </div>
    <% end %>
    <%= render partial: 'layouts/shared/follows'%>
<% end %>



