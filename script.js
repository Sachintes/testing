const form = document.querySelector ("form");

Email.send({
    Host : "smtp.elasticemail.com",
    Username : "sachintnm001@gmail.com",
    Password : "DD5B22FFA888D5098594195243386849C9B2",
    To : 'sachintnm001@gmail.com',
    From : "sachintnm001@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);

form.addEventListener("submit", (e) => {
e.preventDefault();
? sendEmail();
});
