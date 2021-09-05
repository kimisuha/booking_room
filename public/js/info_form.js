$(document).ready(function () {
    $("button").click(function () {
        var Name = $("#inputName").val();
        var DateBorn = $("#inputDateBorn").val();
        var PeopleId = $("#inputPeopleId").val();
        var Phone = $("#inputTelephoneNumber").val();
        var AccountNumber = $("inputAccountNumber").val();
        var AccountType = $("inputAccountType").val();

        var User = {
            name: Name,
            dateborn: DateBorn,
            peopleid: PeopleId,
            phone: Phone,
            accountnumber: AccountNumber,
            accounttype: AccountType
        }

        return User;
    });
});