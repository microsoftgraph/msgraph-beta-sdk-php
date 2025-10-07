<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApprovalItemResponse extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApprovalItemResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalItemResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalItemResponse {
        return new ApprovalItemResponse();
    }

    /**
     * Gets the comments property value. The comment made by the approver.
     * @return string|null
    */
    public function getComments(): ?string {
        $val = $this->getBackingStore()->get('comments');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comments'");
    }

    /**
     * Gets the createdBy property value. The identity set of the approver.
     * @return ApprovalIdentitySet|null
    */
    public function getCreatedBy(): ?ApprovalIdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof ApprovalIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Creation date and time of the response.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comments' => fn(ParseNode $n) => $o->setComments($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([ApprovalIdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([ApprovalIdentitySet::class, 'createFromDiscriminatorValue'])),
            'response' => fn(ParseNode $n) => $o->setResponse($n->getStringValue()),
        ]);
    }

    /**
     * Gets the owners property value. The identity set of the principal who owns the approval item.
     * @return array<ApprovalIdentitySet>|null
    */
    public function getOwners(): ?array {
        $val = $this->getBackingStore()->get('owners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalIdentitySet::class);
            /** @var array<ApprovalIdentitySet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owners'");
    }

    /**
     * Gets the response property value. Approver response based on the response options. The default response options are 'Approved' and 'Rejected'. The approval item creator can also define custom response options during approval item creation.
     * @return string|null
    */
    public function getResponse(): ?string {
        $val = $this->getBackingStore()->get('response');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'response'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comments', $this->getComments());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('response', $this->getResponse());
    }

    /**
     * Sets the comments property value. The comment made by the approver.
     * @param string|null $value Value to set for the comments property.
    */
    public function setComments(?string $value): void {
        $this->getBackingStore()->set('comments', $value);
    }

    /**
     * Sets the createdBy property value. The identity set of the approver.
     * @param ApprovalIdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?ApprovalIdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Creation date and time of the response.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the owners property value. The identity set of the principal who owns the approval item.
     * @param array<ApprovalIdentitySet>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

    /**
     * Sets the response property value. Approver response based on the response options. The default response options are 'Approved' and 'Rejected'. The approval item creator can also define custom response options during approval item creation.
     * @param string|null $value Value to set for the response property.
    */
    public function setResponse(?string $value): void {
        $this->getBackingStore()->set('response', $value);
    }

}
