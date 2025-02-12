from django.shortcuts import render
from django.http import HttpResponse
from .models import Post, Comment
from django.views import View
from django.views.generic import ListView, DetailView
from django.shortcuts import redirect
from django.http import HttpResponseRedirect

class IndexView(ListView):
    template_name = 'index.html'
    context_object_name = 'posts'
    queryset = Post.objects.all().order_by('-date')[:3]

class DetailView(DetailView):
    model = Post
    template_name = 'detail.html'
    context_object_name = 'post'
    slug_field = 'slug'
    slug_url_kwarg = 'slug'

class PostsView(ListView):
    template_name = 'allPosts.html'
    context_object_name = 'posts'
    queryset = Post.objects.all().order_by('-date')

class AddCommentView(View):
    def post(self, request, post_id):
        selectedPost = Post.objects.get(id=post_id)
        newComment = Comment(name=request.POST['name'], com=request.POST['com'], email=request.POST["email"], post=selectedPost)
        newComment.save()
        return HttpResponseRedirect("/" + selectedPost.slug)