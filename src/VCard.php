<?php namespace Faker\Provider;

class VCard extends Base
{
    public function carddata()
    {
        $raw = 'BEGIN:VCARD' . "\n" .
            'N:' . $this->generator->lastName. ';' . $this->generator->firstName . ';;' . $this->generator->title . ';' ."\n" .
            'ADR;DOM;PARCEL;HOME:;;' . $this->generator->streetAddress . ';' . $this->generator->city .';' . $this->generator->state. ';' . $this->generator->postcode . ';' . "\n" .
            'EMAIL;INTERNET:' . $this->generator->email . "\n" .
            'ORG:' . $this->generator->company . "\n" .
            'TITLE:' . $this->generator->bs . "\n" .
            'END:VCARD';

        return $this->generator->parse($raw);
    }

    public function uri()
    {
        return $this->generator->uuid . '.vcf';
    }
}
