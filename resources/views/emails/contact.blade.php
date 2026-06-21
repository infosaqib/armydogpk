<div style="font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <h2 style="color: #1F2937; border-bottom: 3px solid #D97706; padding-bottom: 15px;">New Contact Form Submission</h2>

        <div style="margin: 20px 0; line-height: 1.6; color: #333;">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone ?? 'Not provided' }}</p>
            <p><strong>Service Interest:</strong> {{ $service }}</p>
        </div>

        <div style="margin: 20px 0; padding: 15px; background-color: #f9fafb; border-left: 4px solid #D97706; border-radius: 4px;">
            <p><strong>Message:</strong></p>
            <p style="color: #555; white-space: pre-wrap;">{{ $message }}</p>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e5e7eb; font-size: 12px; color: #6b7280;">
            <p>This is an automated email from Army Dog Center contact form. Please reply directly to the sender's email address.</p>
        </div>
    </div>
</div>
