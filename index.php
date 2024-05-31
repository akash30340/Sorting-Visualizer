
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Visualizer</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" defer>

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
     <link rel="stylesheet" type="text/css" href="CSS/style1.css">
    <script type="text/javascript" src="javascript/script.js" defer></script>
     <script type="text/javascript" src="javascript/script1.js" defer></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
</head>
<body>
  <div class="navak">
<?php require 'partials/_nav.php' ?>  
</div>
    <main class="cover-container d-flex p-3 mx-auto flex-column">
        <header class="masthead">
          <div class="inner">
            <h3 class="masthead-brand font-italic">Sort Visualiser</h3>
            <nav class="nav nav-masthead">
              <a id="insertion-link" class="nav-link active" href="#Insertion" onclick="changeActiveClass(this)">Insertion</a>
              <a id="bubble-link" class="nav-link" href="#Bubble" onclick="changeActiveClass(this)">Bubble</a>
              <a id="selection-link" class="nav-link" href="#Selection" onclick="changeActiveClass(this)">Selection</a>
              <a id="merge-link" class="nav-link" href="#Merge" onclick="changeActiveClass(this)">Merge</a>
              <a id="quick-link" class="nav-link" href="#Quick" onclick="changeActiveClass(this)">Quick</a>
            </nav>
          </div>
        </header>
        <article class="inner cover" id="visual">
           <p class="counter complexity">Number of steps: <span id="counter">0</span></p>
        </article>
  
        <section role="main" class="inner cover">
          <h1 class="cover-heading">
             <span id="title">Insertion Sort</span>, <span class="complexity">O(<span id="complexity"></span>)</span></h1>
          <p  id="description" class="lead"><a href="https://google.com">Insertion Sort</a> </a>Insertion sort iterates, consuming one input element each repetition,and growing a sorted output list. At each iteration, insertion sort removes one element from the input data,finds the location it belongs within the sorted list, and inserts it there. It repeats until no input elements remain.</p>
          <p class="lead">
            <a id="animate" href="#" class="btn btn-lg btn-secondary">Run</a>
            <a id="run" href="#" class="btn btn-lg btn-secondary">Step</a>
            <a id="reset" href="#" class="btn btn-lg btn-secondary">Reset</a>
          </p>
        </section>
        <section role="main" class="inner cover">
          <h1 class="cover-heading">
            <span id="title" style="color: orange;"><u>Algorithm For Insertion Sort</u></span></h1><P>
            <font color="white">
            #include < stdio.h > <br>
            void insertion(int* arr, int n) <br>
            {<br>
              int i,j,temp;
              <iframe width="360" height="315" src="https://www.youtube.com/embed/nKzEJWbkPbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
              for(i=1;i < n ; i++) <br>
              {<br>
                temp=arr[i]; <br>
                j=i-1; <br>
                while(temp<arr[j] && j>=0) <br>
                {<br>
                  arr[j+1]=arr[j]; <br>
                  j--; <br>
                }<br>
                arr[j+1]=temp;<br>
              }<br>
            }<br>
            int main()<br>
            {<br>
              int a[10]={2,6,1,8,34,78,23,56,98,10};<br>
              int i;<br>
              insertion(a,10);<br>
              for(i=0;i<10;i++)<br>
              printf("%d ",a[i]);<br>
              return 0; <br>
              
            } <br>
          </font>
        </p> 
        </section>
        <section role="main" class="inner cover">
          <h1 class="cover-heading">
             <span id="title" style="color: orange;"> <u>Algorithm of Bubble Sort </u></span></h1>
             <iframe width="360" height="315" src="https://www.youtube.com/embed/o4bAoo_gFBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
             <p> <font color="white">
              #include< stdio.h > <br>
              void bubblesort(int a[],int n) <br>
                { <br>
                  int i,j,temp; <br>
                  for(i=0;i < n;i++) <br>
                  { <br>
                    for(j=i;j<n;j++) <br>
                    { <br>
                      if(a[i]>a[j]) <br>
                      { <br>
                        temp=a[i]; <br>
                        a[i]=a[j]; <br>
                        a[j]=temp; <br>
                      } <br>
                    } <br>
                  } <br>
                } <br>
                int main() <br>
                { <br>
                  int a[10]={2,6,1,8,34,78,23,56,98,10}; <br>
                  int i; <br>
                  bubblesort(a,10); <br>
                  for(i=0;i < 10;i++) <br>
                  printf("%d ",a[i]); <br>
                  return 0; <br>
                } <br>
              </font></p>  </section>
            <section role="main" class="inner cover">
              <h1 class="cover-heading">
                 <span id="title" style="color: orange;"> <u> Algorithm of Selection Sort </u></span></h1> <P> 
                  <font color="white">
                  #include < stdio.h > <br>
                    void selectionsort(int a[], int n) <br>
                    { <br>
                      int i,j,temp,min; <br>
                      for(i=0;i < n;i++) <br>
                      { <br>
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/0-W8OEwLebQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
                        min=i; <br>
                        for(j=i+1;j < n;j++) <br>
                        { <br>
                          if(a[min]>a[j]) <br>
                          min=j; <br>
                        } <br>
                        temp=a[i]; <br>
                        a[i]=a[min]; <br>
                        a[min]=temp; <br>
                      } <br>
                    } <br>
                    int main() <br>
                    { <br>
                      int a[10]={2,6,1,8,34,78,23,56,98,10}; <br>
                      int i; <br>
                      selectionsort(a,10); <br>
                      for(i=0;i < 10;i++) <br>
                      printf("%d ",a[i]); <br>
                      return 0; <br>
                    } <br> 
                            </font>
                  </p> 
                </section>
                <section role="main" class="inner cover">
                  <h1 class="cover-heading">
                     <span id="title" style="color: orange;"> <u>Algorithm of Merge Sort </u></span></h1>
                      <p> 
                      <font color="white" align="left">
                      #include < stdio.h > <br>
                      void mergeSortedSubarray( int a[], int lb, int le, int re) <br>
                      { <br>
                          int i,na,nb,nc,c[100]; <br>
                          na=nc=lb; <br>
                          nb= le+1; <br>
                          int done =0; <br>
                          while((na<=le)&&(nb<=re)) <br>
                          { <br>
                            if(a[na]< a[nb]) <br>
                            c[nc++]=a[na++]; <br>
                            else <br>
                            c[nc++]=a[nb++]; <br>
                          } <br>
                          if(nb>re) <br>
                          <iframe width="360" height="315" src="https://www.youtube.com/embed/unxAnJBy12Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  align="right"></iframe>
                          { <br>
                            while(na<=le) <br>
                            c[nc++]=a[na++]; <br>
                          } <br>
                          if(na>le) <br>
                          { <br>
                            while(nb<=re) <br>
                            c[nc++]=a[nb++]; <br>
                          } <br>
                          for(i=lb;i <=re;i++) <br>
                          a[i]=c[i]; <br>
                          } <br>
                          void mergeSort(int a[],int lb, int ub) <br>
                          { <br>
                            int mid; <br>
                            if(lb<ub) <br>
                            { <br>
                              mid=(lb+ub)/2; <br>
                              mergeSort(a,lb,mid); <br>
                              mergeSort(a,mid+1,ub); <br>
                              mergeSortedSubarray(a,lb,mid,ub); <br>
                            } <br>
                          } <br>
                       </font> </p> </section>
                  <section role="main" class="inner cover">
                    <h1 class="cover-heading">
                       <span id="title" style="color: orange;"><u> Algorithm of Quick Sort</u></span></h1>  <P> <font color="white">
                        #include < stdio.h > <br>
                        void partition( int a[], int beg, int end, int *loc) <br>
                        { <br>
                            int left,right,temp; <br>
                            left = *loc = beg; <br>
                            right = end; <br>
                            int done =0; <br>
                            while(!done) <br>
                            { <br>
                              <iframe width="360" height="315" src="https://www.youtube.com/embed/QN9hnmAgmOc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
                                while((a[*loc]< a[right])&&(*loc!=right)) <br>
                                right--; <br>
                                if(*loc==right) <br>
                                done=1; <br>
                                if(a[*loc]>a[right]) <br>
                                { <br>
                                    temp= a[*loc]; <br>
                                    a[*loc] = a[right]; <br>
                                    a[right] = temp; <br>
                                    *loc= right; <br>
                                } <br>
                                if(!done) <br>
                                {
                                    while((a[left]< a[*loc])&&(*loc!=left)) <br>
                                    left++; <br>
                                    if(*loc==left) <br>
                                    done=1; <br>
                                    if(a[left]>a[*loc]) <br>
                                    { <br>
                                        temp= a[left]; <br>
                                        a[left] = a[*loc];  <br>
                                        a[*loc] = temp; <br>
                                        *loc= left; <br>
                                    } <br>
                                } <br>
                              } <br>
                          } <br>
                          void quickSort(int a[],int lb, int ub) <br>
                          { <br>
                              int loc; <br>
                              if(lb< ub) <br>
                              { <br>
                                  partition(a,lb,ub,&loc); <br>
                                  quickSort(a,lb,loc-1); <br>
                                  quickSort(a,loc+1,ub); <br>
                              } <br>
                          } <br> </font></p> 
      </main>
</body>
</html>