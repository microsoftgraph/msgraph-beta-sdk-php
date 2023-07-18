<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEventPresenter extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new virtualEventPresenter and sets the default values.
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
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([CommunicationsUserIdentity::class, 'createFromDiscriminatorValue'])),
            'presenterDetails' => fn(ParseNode $n) => $o->setPresenterDetails($n->getObjectValue([VirtualEventPresenterDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identity property value. Identity information of the presenter.
     * @return CommunicationsUserIdentity|null
    */
    public function getIdentity(): ?CommunicationsUserIdentity {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof CommunicationsUserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Gets the presenterDetails property value. Other detail information of the presenter.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('presenterDetails', $this->getPresenterDetails());
    }

    /**
     * Sets the email property value. Email address of the presenter.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the identity property value. Identity information of the presenter.
     * @param CommunicationsUserIdentity|null $value Value to set for the identity property.
    */
    public function setIdentity(?CommunicationsUserIdentity $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the presenterDetails property value. Other detail information of the presenter.
     * @param VirtualEventPresenterDetails|null $value Value to set for the presenterDetails property.
    */
    public function setPresenterDetails(?VirtualEventPresenterDetails $value): void {
        $this->getBackingStore()->set('presenterDetails', $value);
    }

}
