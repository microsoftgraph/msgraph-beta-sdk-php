<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LegalHold extends Entity implements Parsable 
{
    /**
     * Instantiates a new LegalHold and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LegalHold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LegalHold {
        return new LegalHold();
    }

    /**
     * Gets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     * @return string|null
    */
    public function getContentQuery(): ?string {
        $val = $this->getBackingStore()->get('contentQuery');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentQuery'");
    }

    /**
     * Gets the createdBy property value. The user who created the legal hold.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the legal hold was created.
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
     * Gets the description property value. The legal hold description.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the legal hold.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the errors property value. Lists any errors that happened while placing the hold.
     * @return array<string>|null
    */
    public function getErrors(): ?array {
        $val = $this->getBackingStore()->get('errors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentQuery' => fn(ParseNode $n) => $o->setContentQuery($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errors' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setErrors($val);
            },
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'siteSources' => fn(ParseNode $n) => $o->setSiteSources($n->getCollectionOfObjectValues([SiteSource::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LegalHoldStatus::class)),
            'unifiedGroupSources' => fn(ParseNode $n) => $o->setUnifiedGroupSources($n->getCollectionOfObjectValues([UnifiedGroupSource::class, 'createFromDiscriminatorValue'])),
            'userSources' => fn(ParseNode $n) => $o->setUserSources($n->getCollectionOfObjectValues([UserSource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the lastModifiedBy property value. the user who last modified the legal hold.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the legal hold was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the siteSources property value. Data source entity for SharePoint sites associated with the legal hold.
     * @return array<SiteSource>|null
    */
    public function getSiteSources(): ?array {
        $val = $this->getBackingStore()->get('siteSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteSource::class);
            /** @var array<SiteSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteSources'");
    }

    /**
     * Gets the status property value. The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
     * @return LegalHoldStatus|null
    */
    public function getStatus(): ?LegalHoldStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof LegalHoldStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the unifiedGroupSources property value. The unifiedGroupSources property
     * @return array<UnifiedGroupSource>|null
    */
    public function getUnifiedGroupSources(): ?array {
        $val = $this->getBackingStore()->get('unifiedGroupSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedGroupSource::class);
            /** @var array<UnifiedGroupSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unifiedGroupSources'");
    }

    /**
     * Gets the userSources property value. Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
     * @return array<UserSource>|null
    */
    public function getUserSources(): ?array {
        $val = $this->getBackingStore()->get('userSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSource::class);
            /** @var array<UserSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentQuery', $this->getContentQuery());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('errors', $this->getErrors());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('siteSources', $this->getSiteSources());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('unifiedGroupSources', $this->getUnifiedGroupSources());
        $writer->writeCollectionOfObjectValues('userSources', $this->getUserSources());
    }

    /**
     * Sets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     * @param string|null $value Value to set for the contentQuery property.
    */
    public function setContentQuery(?string $value): void {
        $this->getBackingStore()->set('contentQuery', $value);
    }

    /**
     * Sets the createdBy property value. The user who created the legal hold.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the legal hold was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The legal hold description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the legal hold.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errors property value. Lists any errors that happened while placing the hold.
     * @param array<string>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the lastModifiedBy property value. the user who last modified the legal hold.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the legal hold was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the siteSources property value. Data source entity for SharePoint sites associated with the legal hold.
     * @param array<SiteSource>|null $value Value to set for the siteSources property.
    */
    public function setSiteSources(?array $value): void {
        $this->getBackingStore()->set('siteSources', $value);
    }

    /**
     * Sets the status property value. The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
     * @param LegalHoldStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LegalHoldStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the unifiedGroupSources property value. The unifiedGroupSources property
     * @param array<UnifiedGroupSource>|null $value Value to set for the unifiedGroupSources property.
    */
    public function setUnifiedGroupSources(?array $value): void {
        $this->getBackingStore()->set('unifiedGroupSources', $value);
    }

    /**
     * Sets the userSources property value. Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
     * @param array<UserSource>|null $value Value to set for the userSources property.
    */
    public function setUserSources(?array $value): void {
        $this->getBackingStore()->set('userSources', $value);
    }

}
