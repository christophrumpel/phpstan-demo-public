# PhpStan Issue

When you run PhpStan in this app on Level 9, you will see this error `11     Cannot call method delete() on mixed.`.

In my opininon, we have defined enough info in the Collection class, so that PhpStan should know what we return here.
Why is PhpStan throwing this error?

PS: If I would use Level 8, there are no errors, but also PhpStan wouldn't detect if I call a method which is not given on the collection like this `->first()->methodNotGiven`. So this also isn't an option.


![CleanShot 2022-03-23 at 16 59 09@2x](https://user-images.githubusercontent.com/1394539/159743136-16e1644f-6f0b-4b96-bb96-63be6ec2709f.png)
