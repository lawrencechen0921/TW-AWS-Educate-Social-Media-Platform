@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABBVBMVEX////MzMz09PTJyclAQEI9PT81NTc7Oz1CQkT7//82Njn//v/8/PwxMTOTk5X///74rjPw8PC1tbXe3t6wsLL5qSBISEr+4bTS0tTp6epUVFX9+vVcXF46Oj0vLzA9PT38qzF8fHzj4+OKior9uEiioqOfn6G7u7tra213d3f5rDVOTlBYWFpxcXMqKixiYmL9qSP5wmX98dv30JH3rSeOjpD66cv85b//9u37+OX7rBn7zo7+7OP80Hj1sDz4xXf2sh/+26H5vlT88tf2zoPyuSP95cnwvVn904b3uFDyszH9qj723qf3wVn75bf9oyP11pX2+uwTExT/w3vz7MX9vWIfHyJDwoBdAAAQ00lEQVR4nO2ah3/bthLHIQkEJ0Rta3FIiratYdMj9ItnXluriRu/tvn//5R3B2p5JaEcO6Y//LWxRIoE+eUd7g4ASeKtiyQSqbcsJExVkm9XlRQSJsnbVTImjLxiwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwujrtRGapqnrqlo7ODwiOoHvpvnEFl8fYc1U359f+X7m+FI1UU9s8dURqup/PgwmmcyJ53mnBzVVVZ/Y4msjJIfTMxf4Mp6bcYv+u63aUxt8HYS6XgN3hO53Pit6XmY287yil8lkBq6f+birqjrRjU3bfhWEEE9U8MfdY28yQK7J5OLTb6cuQA68jOt9ODRUdePu+CoITaLXaodTsB4Cev7pP8CrXx4Pihncnvift4427o6/lrAGzqlCdiBH5xeB/Tz/5Pg9hlRdNdWjT1cT92Tg4t69XQLOir4c8hq/llAH/0T3/PjfiQu9z514d6xlXv+LvjoYuN7Z9DcwLJ4R7hq/llBEF4BwB4OZ+9fE+3CgY1i59Ts6q+cOMq57dnX+HvNluGv8YhtCcr9wobdB4Cy+24OoWQOjrh2gGjoe83uxCF3UHUxO8JhwiL+IEGszk4B9TjwRTSb+xXlNJcJ+as0Az72BLVM3sWpTyQ2GIVc8h8wUygBy8+OX+lWE+N/11APbQCSZ+B9+w2J08aNpXk6hoIFd+CQI2lrd/cP3BxhsJ8WrrSP9W43f1q/yUtO8+eC7s9nJYHIm3NMIWIQM/bToTSaZ8yPARu6aiQ8A4m3xzBPx9v2PX+nX2fDSh/jiQgjdQveEf8sgCZabepA6oK7ByhTGGBhyIE2oh1cD6I5/ziZ7P36pDQihfsomOq2d3k5/v1A2iGGQZhnVnP++2jDmG2VxVqWbbsBZrTacpOsHQIhdcDD99B4CqLlKA9D5rrFqgwrA8z9/wqrNMKCsObo+heNngP7Xl2clJMl0iWuaJMuSxli1Czff/coZs3uCg5RHjDN7HBA24QdmD/GslsSZLMmWzLTtLtFv9nz/zMMsUMycHtZUs7bohzXw193jTBGfAFr59IDAEGN372QC+R+On5x9PnpWwnKJUYUqkkTxw7Fb0IoDG1IpaKbN8Fcr2OgySilvE5IPzsJzKJXhJIPAMNCbYIAEf3z3ZVdfpHocBYPFtj6fAeMZjKL836+huvEzJzCkGhRnHw7MECOO8IQVRVbgLrmk4D/4ZncJ6cM+hSfEATvidxZstBge0SRGXQY4CShlJKWjNjgjqR18BFOh42UmZ1PskAiHhTh4rKoeQLJHq82KxSIae+AV3eCoEPcbnrClwQ1K291mpZmqS3C38g6aCghZWrQ4RG6FddBJk1V4EFLdICmbKorUK1cq+bYwpILXFKb6HSqWAYwiwJjHB1DEQBUuCCARqjdbv2cWcjP+xZdd89kzftKB+5dKFbGRFQ5ZTZIsAjii7+XRL+GQntjgsIGw+xruC87qwk6Jp4jwRxg3Xe7NMOoA4sT79/y9CkU3QhgQPI2D6QLw5K/p4RGB3hqy9A5NWP4f5+xriwQj0jH0PwqEpAeGcygSFNALJUUqZQn2SYBheUIaMlpeEOqkBKLtgNAAO0Jt+tlDLwRD+Zm//zGD2gYq8pkvSh7orO6Jfw3mq5lhS++whEaynAdlg7CpD2lgQ5JDN+XQI0nDobQEu0WvxD4pbcOhDQutXc8/3CpQ/ouJY+Zi1PFPzncxN3z2PUyLUNKdfISP4lYosk0Jb52b72tzLyUVDaC0fdgJdHJ7GHTEJIYX0T3bQfzl406qiVe7PSlhmrsYUi9OXBgpgbP63vTjbPKXO8MNb7p1dPPuhQkriVyn1asyS1nYULgpWgt6niI3wXZyzyAJ2KAM8j3JliQReGUNsmGrm72FCPHzHAhPjm62cCAs8ocbjIfPrvYuIebW3k1eihBuzCiMKeR0x3EkuOsFYVu4aZPkuCINSRtMCh0xDTaWhqL1/JA7NMiGkmyXOuuNQrS5cr3BFHqkefDHbOIC46wIFbkLpYCOVVztnftyhPkhw1wvOZzzehVzgCDMaxg1c9DhqNwgZYgw0BGHcCRrzc8sVOG54CPBp8J6a0Y01csihNIt8VWtQf6YQNiZvPv0vkaCGeEXJCRZB+KkIlv1ViHVBN9c2NCA3EjlPilJlHVFb9Q62RHA2Kn5oyGk2W3VFSbDKeC76bVG9S84rYalmI5z3uRy72p2enCDeSM44OUIDdJBb5R75WBb9D4k1MUPlOZthY4gKfQtRdoRJZtzu/FKtwFBB84C512Y0axdQaebiq86VNk4VLqBrziiMl7chlUHs10FRxSg7aUNg0xvNSB6UoJZUaHDHUuYFXNMvtls5pMBUlmmq/Qv9A/EUP96Pj6Ewg3LMhMddLEy85KEyCGN5+E+yZb9kIhOh/7nYMfDkEqxHBA5kuS/yrI8Ss3baFlYuK8RfpmADW++Uay8OGF17l8dbZ4tcDutiVgZ5H0ixhEgW7QtBh+sMW+jh4YWNc/i/mEkOFW/MWB4ScK6IypNPCPZDnpUNbjXsk0FIhfGwTIN898ObhgYYjG6iJiEiYVa/VWb732IpFM0ofBJXXhp4KTiw9SR0H8hQjH6o9p2o9UY4sgIbnY4t4YljEYDA3e5goL8IQjzWHlTVuq3GlXh2ry8arP22T1xi9MDQIJOaNSCRUMY18NXCDsQb2rTiVs8fAlCw0iWMFtA1rYg37MhuqIz71EtMTC0WgKpMhIGZRUS9NncSIQXWdbEQHjUXmtV/c0fzLyiNz3EOUQxsY3JH0dS8Hl5YKj6wcXZcdhRxYaEQcbHm7SYlcvZEEHsYLBLEiNLlq1RN9iqarChiTGUmMtJlJgVzAtQmUk5sj61LYo2KNLOTk4/HSTny6Lwp7Z7fXrl+/8i79GG608b1KXJ9jZlTC6N21mS7zcajX5hHlkbqP7cogXxU3dxFgB1+1XFYUwa9gq3LwjG2oKe6LoQTib+2buL6enx8fHpxYkHowsYXviHqhgshpglfRKhSYxKMIBaylj7+y0ZTTixee9q4JTm5d8TbzYLBoML4YDqz8Fg4O9CvYqTVWFuc6FNZhOXJPe+GGuQxq0jHmkhkOh2MN79ExeAxRriUjgPdXasqueufxFigm1NT5wRnhtvccs/tBR9/yAdV0ghgNYO9q483y/OTVgsFsFlP4LxIFt4A+96o1t8FWvAa1LN3cOtvT+moNPjT4e7c7u9ZMZ/ZpnoryoG0qVw91sixGJbFNwmrqzV5us1b4gQypcb3RTTjDjTiAN83AuEg5eq2n5Ixg8GnR+VSvZ8/93lRue+Nhs+LLNmXH/ZDfuOQqBnIYS8Xvn+USGEKzVkw5f4noWwYY/2f2qDpr75W4rPQ+jcmmfaTMn0/n7zJ9zM8xDKTyY0SJayUfn7B35Xr5UQZ8mD2fKnalPCu8XzLf2Al34/mWRL0jqh8b2LPqan2NC4vbHa/C7hQ3dq3Pm8Q/j4id/RxoTGAw90se9HbPiQPW7tTN4j3MiEGxLm01Vms+10c20uotmBfXzYKuNioSCstDvtVcuFdie4YR1+GDu2LY07q1hppFpVxrk2bKSwyXKnnVYUeb/d7gSZFU7ROC+1yqHtGJ7QIMmWjdNQVGKsEzgn/O1oGuyTLI03jFZAmLeZtsz8epWPCsIOeltjMsWDGU/Pr5wfiyahTcvu4YLriOHsq6yxr2W8QkFi+KMk80b24dv6WYSIU9lmlFnDOuWSxBcLSzucUi5vbytc4jvzWJqXKV0R1iUezCw2RgplchUPpXxHWKTpyJRpw3pVgmZYH4i+coaLq4wLwganjJXqQ25RVg/pcBvYcMwc3qnocGqVUbsgdqZtxaLdpK4bqTGz5q9l5J01QqMu2Tl8RG1bkZUuLpOnSpYyEguJQZOGridTJcDOk2Y31S1Rq51K4ZHQut3IE93I9wF157kJ21zR5tOHZIcFE6L5EXWqi0b24ekHhIwqq/p0bsM8p8723NOSVZmOkni6EtgXVLZwdY6ISKMFHbfMHb6YXm3DQ02F6oobvG1CeWG5MZTEtRsaZcuXEIyx9A3C/fVDEyMJp1cLI4YLxcHcVV0O5smzS8Id2VktATQ0qxeCbwPCrk2VILigCtwZisctN1YPNmUrjxIaJVygWRya7NW34Ql1G43lqjc8H36bsCmvpw3o3M4jb3T8FEIDK7LWarsi43poWcMFp9X0IdzSY4TgpOtetsqAi7TTtegdGxa4NFy7hbrEciSEQttwKMn9XGEphfIUvuQkrz/XsfwoYRd6bvN+PxIDo2Q+BVlPUe7YMM1odXXF3LYUrugNTQhOKuMblXNBRC+Il2XW09Q+e5SwwBT5oThRyTWGnDPONIiltwkbFiQitrympMiNBxr4eYT4Tpq2EtNGbQivizcvA6UfJ4SH4dwvS5oNcfNcK/UK9/ohEEJtwRbX08SLrM9I6FCtkSvkAhXQe8rYU27ZsLUglJS7GR8J712tqTDKh+lcopLEV+XuEjKpDtdZXjJX6N5t4KcS1le5aSnoXLf7oXPfhkZV3HlOo3Ll1oIH/N/TIAMtFgbG8h3CDpPGd68YIiGGJmwxbW19OgiGeabY6/GN0fs2zCqif5VHixdshBqlUgufBGsv10Du2bALfWB9xefBYcnjCk2Ysqm0Ojw/rIJ/gn2c3mqU0V3kQxnttTiPixiZlKW1QJFVHHg0KU41dAEjAFtFmiANViTKE8tTjHG19LxemqQYrRfPcR+qbSICevAGBu4H3sCGFUdiqWAvOl9w5w0nqGnEunCBYzqFJ6LNX+1Hn6QAbSxnMeBbn0m95epoiltOqKnK8HVph88fsiEMg295kwqHYU8i2GdACRcQGlUqj+evWu6Dx4rTyuAD2/NbLMvilYwEF14qVIDUwERViDYM/DlhU9aa11HNKkS6MIAbECa3oWTpJ8A38/vw8MdihFiAERFv5Q2S7VaZVRKEBknDrY8TsDNVZ8pi9JS2qaUUINo008wRhXtWkaiWbhpGNtXjlqXILSMZvCI+TBfacEALiv16t2KYlYIiSVq42eYNxviVKnMczmD8ChGiOr9chzsUKgGZwzig35rPYiRhnIQ7mS3b3RYTdSnYGMeA3GI2RODASm0b98gOjPF5qwW7bVHOc/ByHB+Cn+JQlMvQluSw1GM39tMISRbyswwDcpmxxvJ55oYcBvkU9xnLOe9y1XZkybK4kiN9+2vwRoPRpjaToAGLj+cVddrGIbxsMaUNvVIK3kVp1m2uaYLQaCtMTCFobFwOOY2x4TxNe6c6HPbS60kwmWtsD4fjNNxRqlBILHb2q6VhD10Ndi4OzwaH7qeMxSpVPt0bDrcbBfH2+7AUvPqYLEOibwcv5FQKeEodTwmpJ8613U5NunHn9QTjzoFLIjxUJ/OIOh+VLI8zHn6tRH9k/3cUjdW1pygmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwugrJoy+YsLoKyaMvmLC6CsmjL5iwqjLePOECxtWkm9XFSRMpN6yEkj4xvV/OouvKvenLPEAAAAASUVORK5CYII="class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class = "d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                @can('update', $user->profile)
                    <a href="/p/create"> Add new post</a>
                @endcan

                
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit" >Edit Profie</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count()}}</strong> post</div>
                <div class="pr-5"><strong>12</strong> followers</div>
                <div class="pr-5"><strong>0</strong> following</div> 
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href = "#" >{{ $user->profile->url }} </a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href ="/p/{{ $post->id }} ">
            <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
         </div>
        @endforeach
    </div>
</div>
@endsection
