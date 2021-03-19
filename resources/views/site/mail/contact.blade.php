<style>
    td {
        border: 1px solid black;
    }
</style>
<p>Chào bạn: {{ $contact->name }}</p>.
<p>Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ giải đáp thắc mắc của bạn trong thời gian gần nhất.</p>
<h1>Thông tin:</h1>
<table>
    <tr>
        <td>Địa chỉ</td>
        <td>{{ $contact->address }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $contact->email }}</td>
    </tr>
    <tr>
        <td>Câu hỏi</td>
        <td>{{ $contact->content }}</td>
    </tr>
</table>
