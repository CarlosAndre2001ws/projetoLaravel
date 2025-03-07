<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <div {{ $attributes->merge(['class' => 'alert alert-' . $type . ' role="'. $role . '"']) }}>
        hi, {{ $message }}
    </div>

</div>
