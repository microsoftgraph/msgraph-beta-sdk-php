<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventPresenter extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEventPresenter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventPresenter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventPresenter {
        return new VirtualEventPresenter();
    }

    /**
     * Gets the email property value. Email address of the presenter.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'presenterDetails' => fn(ParseNode $n) => $o->setPresenterDetails($n->getObjectValue([VirtualEventPresenterDetails::class, 'createFromDiscriminatorValue'])),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([VirtualEventSession::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identity property value. Identity information of the presenter. The supported identities are: communicationsGuestIdentity and communicationsUserIdentity.
     * @return Identity|null
    */
    public function getIdentity(): ?Identity {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Gets the presenterDetails property value. Other detail information of the presenter. This property returns null when the virtual event type is virtualEventTownhall.
     * @return VirtualEventPresenterDetails|null
    */
    public function getPresenterDetails(): ?VirtualEventPresenterDetails {
        $val = $this->getBackingStore()->get('presenterDetails');
        if (is_null($val) || $val instanceof VirtualEventPresenterDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presenterDetails'");
    }

    /**
     * Gets the sessions property value. The sessions property
     * @return array<VirtualEventSession>|null
    */
    public function getSessions(): ?array {
        $val = $this->getBackingStore()->get('sessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventSession::class);
            /** @var array<VirtualEventSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeObjectValue('presenterDetails', $this->getPresenterDetails());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
    }

    /**
     * Sets the email property value. Email address of the presenter.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the identity property value. Identity information of the presenter. The supported identities are: communicationsGuestIdentity and communicationsUserIdentity.
     * @param Identity|null $value Value to set for the identity property.
    */
    public function setIdentity(?Identity $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the presenterDetails property value. Other detail information of the presenter. This property returns null when the virtual event type is virtualEventTownhall.
     * @param VirtualEventPresenterDetails|null $value Value to set for the presenterDetails property.
    */
    public function setPresenterDetails(?VirtualEventPresenterDetails $value): void {
        $this->getBackingStore()->set('presenterDetails', $value);
    }

    /**
     * Sets the sessions property value. The sessions property
     * @param array<VirtualEventSession>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

}
