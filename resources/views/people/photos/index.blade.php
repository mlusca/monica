<div class="{{ \App\Helpers\LocaleHelper::getDirection() == 'ltr' ? 'fl' : 'fr' }} w-100 pb3 pt1 pl3 pr3">
    <div class="br2 bg-white mb4">
        <photo-list
            hash="{{ $contact->hashID() }}"
            contact-name="{{ $contact->first_name }}">
        </photo-list>
    </div>
</div>