KAPsCore
========

## Declaration ##
Let me first make it very clear that I do support frameworks. Frameworks make task much easier for a professional developer. I too am a professional developer and working in a software firm to arrange bread and butter for my family. As professional, I frequently use different frameworks based on the requirements.

## Why Noframework ##
Well there is no doubt framework are extremely useful as they allow developers to work on the requirements of their project and let framework do all dirty work (frequent work that we have to do in nearly all the projects).

Still, there are times when we decide to develop some project in core PHP that is without using any framework. One of the most important reason is, framework features comes at some cost. Frameworks do nearly every basic operation and on projects we generally do not need all of those operations. Again framework enforce one way or other way of programming that might not fit for our project.

The point is, there are possible conditions when framework might not fit the requirements. A true developer must be capable to develop an application without any framework support. Using framework or not depends on requirements but capability of doing it both the ways is different point.

Students, new software engineers/trainees (as I see even in my company) know the basics of the language but not much about designing/developing large application.


## KAPsCore: targets ##
One of the basic purpose of KAPsCore is to provide a basic platform for core PHP application. Now a common question, if we provide a way, isn't it a framework in itself as frameworks define the way of doing things. No. Difference is, we are not only providing a platform but this tutorial covers how the platform is arranged and why it is arranged like that. Again, it will provide many implementation/options of each part (Model/View/Controller) that we can call it multiple frameworks (If you cant call it Noframework)

## KAPsCore Naming ##

KAPsCore will be available in many formats, that will be differentiated by 3 Alphabets like KAPsCore XYZ.

Here X define how we implement controller. We can have distributed (multiple) controllers or Central controller, as many framework prefer. So X can be (D)istributed or (C)entral.

Y defines Model. We can have plain (S)QL or (A)ctive records or (Propel) or (D)octrine.

Z defines templating language which could be (P)HP or (S)marty or (T)wig.

So KAPsCore DSP means it have distributed controllers, using plain SQL for database CRUD and PHP as templating language.

Other package on my priority list are:
>1. CSP
>2. CPP
>3. CPS
>4. CDP
>5. CDS

Docs folder in the root have further documentation forseparate packages. For now, I'm uploading Word Docs and PDF for documents and will convert them to Markdown in some other free time.