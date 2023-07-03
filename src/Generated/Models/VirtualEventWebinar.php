<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventWebinar extends VirtualEvent implements Parsable 
{
    /**
     * Instantiates a new VirtualEventWebinar and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventWebinar
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventWebinar {
        return new VirtualEventWebinar();
    }

    /**
     * Gets the audience property value. To whom the webinar is visible.
     * @return MeetingAudience|null
    */
    public function getAudience(): ?MeetingAudience {
        $val = $this->getBackingStore()->get('audience');
        if (is_null($val) || $val instanceof MeetingAudience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audience'");
    }

    /**
     * Gets the coOrganizers property value. Identity information of co-organizers of the webinar.
     * @return array<CommunicationsUserIdentity>|null
    */
    public function getCoOrganizers(): ?array {
        $val = $this->getBackingStore()->get('coOrganizers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CommunicationsUserIdentity::class);
            /** @var array<CommunicationsUserIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coOrganizers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getEnumValue(MeetingAudience::class)),
            'coOrganizers' => fn(ParseNode $n) => $o->setCoOrganizers($n->getCollectionOfObjectValues([CommunicationsUserIdentity::class, 'createFromDiscriminatorValue'])),
            'registration' => fn(ParseNode $n) => $o->setRegistration($n->getObjectValue([VirtualEventRegistration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the registration property value. Registration configuration of the webinar.
     * @return VirtualEventRegistration|null
    */
    public function getRegistration(): ?VirtualEventRegistration {
        $val = $this->getBackingStore()->get('registration');
        if (is_null($val) || $val instanceof VirtualEventRegistration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('audience', $this->getAudience());
        $writer->writeCollectionOfObjectValues('coOrganizers', $this->getCoOrganizers());
        $writer->writeObjectValue('registration', $this->getRegistration());
    }

    /**
     * Sets the audience property value. To whom the webinar is visible.
     * @param MeetingAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?MeetingAudience $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the coOrganizers property value. Identity information of co-organizers of the webinar.
     * @param array<CommunicationsUserIdentity>|null $value Value to set for the coOrganizers property.
    */
    public function setCoOrganizers(?array $value): void {
        $this->getBackingStore()->set('coOrganizers', $value);
    }

    /**
     * Sets the registration property value. Registration configuration of the webinar.
     * @param VirtualEventRegistration|null $value Value to set for the registration property.
    */
    public function setRegistration(?VirtualEventRegistration $value): void {
        $this->getBackingStore()->set('registration', $value);
    }

}
