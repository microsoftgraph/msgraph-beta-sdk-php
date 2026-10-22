<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlanContextLink extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlanContextLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanContextLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanContextLink {
        return new PlanContextLink();
    }

    /**
     * Gets the associationType property value. Describes how the plan is associated with the surface.
     * @return string|null
    */
    public function getAssociationType(): ?string {
        $val = $this->getBackingStore()->get('associationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associationType'");
    }

    /**
     * Gets the createdDateTime property value. Date and time the context link was created. Read-only.
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
     * Gets the customLinkText property value. Custom text used to render the link, if provided.
     * @return string|null
    */
    public function getCustomLinkText(): ?string {
        $val = $this->getBackingStore()->get('customLinkText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customLinkText'");
    }

    /**
     * Gets the displayAs property value. How the context link should be displayed. The possible values are: teamsTab, sharePointPage, meetingNotes, other, unknownFutureValue, loopPage, project. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: loopPage , project.
     * @return PlannerPlanContextType|null
    */
    public function getDisplayAs(): ?PlannerPlanContextType {
        $val = $this->getBackingStore()->get('displayAs');
        if (is_null($val) || $val instanceof PlannerPlanContextType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayAs'");
    }

    /**
     * Gets the displayNameSegments property value. Display name segments used to render where the plan is surfaced.
     * @return array<string>|null
    */
    public function getDisplayNameSegments(): ?array {
        $val = $this->getBackingStore()->get('displayNameSegments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayNameSegments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associationType' => fn(ParseNode $n) => $o->setAssociationType($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customLinkText' => fn(ParseNode $n) => $o->setCustomLinkText($n->getStringValue()),
            'displayAs' => fn(ParseNode $n) => $o->setDisplayAs($n->getEnumValue(PlannerPlanContextType::class)),
            'displayNameSegments' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDisplayNameSegments($val);
            },
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isCreation' => fn(ParseNode $n) => $o->setIsCreation($n->getBooleanValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'ownerAppId' => fn(ParseNode $n) => $o->setOwnerAppId($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether the context link is currently active.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the isCreation property value. Indicates whether this context link represents the original creation surface for the plan.
     * @return bool|null
    */
    public function getIsCreation(): ?bool {
        $val = $this->getBackingStore()->get('isCreation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCreation'");
    }

    /**
     * Gets the key property value. Identifier for the context the plan is surfaced in.
     * @return string|null
    */
    public function getKey(): ?string {
        $val = $this->getBackingStore()->get('key');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'key'");
    }

    /**
     * Gets the ownerAppId property value. Application ID of the app that owns the surface the plan is linked from.
     * @return string|null
    */
    public function getOwnerAppId(): ?string {
        $val = $this->getBackingStore()->get('ownerAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerAppId'");
    }

    /**
     * Gets the webUrl property value. URL of the surface where the plan is displayed.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('associationType', $this->getAssociationType());
        $writer->writeStringValue('customLinkText', $this->getCustomLinkText());
        $writer->writeEnumValue('displayAs', $this->getDisplayAs());
        $writer->writeCollectionOfPrimitiveValues('displayNameSegments', $this->getDisplayNameSegments());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isCreation', $this->getIsCreation());
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('ownerAppId', $this->getOwnerAppId());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the associationType property value. Describes how the plan is associated with the surface.
     * @param string|null $value Value to set for the associationType property.
    */
    public function setAssociationType(?string $value): void {
        $this->getBackingStore()->set('associationType', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time the context link was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customLinkText property value. Custom text used to render the link, if provided.
     * @param string|null $value Value to set for the customLinkText property.
    */
    public function setCustomLinkText(?string $value): void {
        $this->getBackingStore()->set('customLinkText', $value);
    }

    /**
     * Sets the displayAs property value. How the context link should be displayed. The possible values are: teamsTab, sharePointPage, meetingNotes, other, unknownFutureValue, loopPage, project. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: loopPage , project.
     * @param PlannerPlanContextType|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?PlannerPlanContextType $value): void {
        $this->getBackingStore()->set('displayAs', $value);
    }

    /**
     * Sets the displayNameSegments property value. Display name segments used to render where the plan is surfaced.
     * @param array<string>|null $value Value to set for the displayNameSegments property.
    */
    public function setDisplayNameSegments(?array $value): void {
        $this->getBackingStore()->set('displayNameSegments', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether the context link is currently active.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the isCreation property value. Indicates whether this context link represents the original creation surface for the plan.
     * @param bool|null $value Value to set for the isCreation property.
    */
    public function setIsCreation(?bool $value): void {
        $this->getBackingStore()->set('isCreation', $value);
    }

    /**
     * Sets the key property value. Identifier for the context the plan is surfaced in.
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->getBackingStore()->set('key', $value);
    }

    /**
     * Sets the ownerAppId property value. Application ID of the app that owns the surface the plan is linked from.
     * @param string|null $value Value to set for the ownerAppId property.
    */
    public function setOwnerAppId(?string $value): void {
        $this->getBackingStore()->set('ownerAppId', $value);
    }

    /**
     * Sets the webUrl property value. URL of the surface where the plan is displayed.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
