<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharePointMigrationTaskParameters implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharePointMigrationTaskParameters and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationTaskParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationTaskParameters {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.sharePointGroupMigrationTaskParameters': return new SharePointGroupMigrationTaskParameters();
                case '#microsoft.graph.sharePointSiteMigrationTaskParameters': return new SharePointSiteMigrationTaskParameters();
                case '#microsoft.graph.sharePointUserMigrationTaskParameters': return new SharePointUserMigrationTaskParameters();
            }
        }
        return new SharePointMigrationTaskParameters();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'preferredLatestStartDateTime' => fn(ParseNode $n) => $o->setPreferredLatestStartDateTime($n->getDateTimeValue()),
            'preferredStartDateTime' => fn(ParseNode $n) => $o->setPreferredStartDateTime($n->getDateTimeValue()),
            'sourceSiteUrl' => fn(ParseNode $n) => $o->setSourceSiteUrl($n->getStringValue()),
            'targetDataLocationCode' => fn(ParseNode $n) => $o->setTargetDataLocationCode($n->getStringValue()),
            'targetOrganizationHost' => fn(ParseNode $n) => $o->setTargetOrganizationHost($n->getStringValue()),
            'targetOrganizationId' => fn(ParseNode $n) => $o->setTargetOrganizationId($n->getStringValue()),
            'targetSiteUrl' => fn(ParseNode $n) => $o->setTargetSiteUrl($n->getStringValue()),
            'validateOnly' => fn(ParseNode $n) => $o->setValidateOnly($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the preferredLatestStartDateTime property value. The preferred latest start date and time. The system cancels the sharePointMigrationTask if it doesn't start by this time. The value must be greater than the preferredStartDateTime, if present. Optional. Only on OneDrive and SharePoint.
     * @return DateTime|null
    */
    public function getPreferredLatestStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('preferredLatestStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredLatestStartDateTime'");
    }

    /**
     * Gets the preferredStartDateTime property value. The preferred start date and time that allows the sharePointMigrationTask to start at a future time instead of as soon as possible (default). Optional. Only on OneDrive and SharePoint.
     * @return DateTime|null
    */
    public function getPreferredStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('preferredStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredStartDateTime'");
    }

    /**
     * Gets the sourceSiteUrl property value. The SharePoint URL of the source site. Optional. Exactly one of sourceSiteId or sourceUrl must be specified. If both or neither are specified, it's an error. Only on OneDrive and SharePoint.
     * @return string|null
    */
    public function getSourceSiteUrl(): ?string {
        $val = $this->getBackingStore()->get('sourceSiteUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceSiteUrl'");
    }

    /**
     * Gets the targetDataLocationCode property value. In Microsoft Entra, this value represents the geographic location (for example, JPN, NAM) of the target organization where the resource must be migrated to ensure data residency and compliance. This property isn't required for single-geo target organizations or when the migration is to the default GEO of a multi-geo target organization. Optional. Only on OneDrive and SharePoint.
     * @return string|null
    */
    public function getTargetDataLocationCode(): ?string {
        $val = $this->getBackingStore()->get('targetDataLocationCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDataLocationCode'");
    }

    /**
     * Gets the targetOrganizationHost property value. The root, admin, or my site host of the specific multi-geo instance of the target organization where the resource must be migrated to ensure data residency and compliance. This property isn't required for single-geo target organizations or when the migration is to the default GEO of a multi-geo target organization. Optional. Only on OneDrive and SharePoint.
     * @return string|null
    */
    public function getTargetOrganizationHost(): ?string {
        $val = $this->getBackingStore()->get('targetOrganizationHost');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetOrganizationHost'");
    }

    /**
     * Gets the targetOrganizationId property value. The unique Microsoft Entra company ID of the target organization to which the source resource must be migrated. Only on OneDrive and SharePoint.
     * @return string|null
    */
    public function getTargetOrganizationId(): ?string {
        $val = $this->getBackingStore()->get('targetOrganizationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetOrganizationId'");
    }

    /**
     * Gets the targetSiteUrl property value. The SharePoint URL of the target site. Only on OneDrive and SharePoint.
     * @return string|null
    */
    public function getTargetSiteUrl(): ?string {
        $val = $this->getBackingStore()->get('targetSiteUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetSiteUrl'");
    }

    /**
     * Gets the validateOnly property value. Indicates whether this task is an actual migration or only a validation. If the parameter is missing, the system treats it as false. The default behavior is a real migration. Optional. Only on OneDrive and SharePoint.
     * @return bool|null
    */
    public function getValidateOnly(): ?bool {
        $val = $this->getBackingStore()->get('validateOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validateOnly'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('preferredLatestStartDateTime', $this->getPreferredLatestStartDateTime());
        $writer->writeDateTimeValue('preferredStartDateTime', $this->getPreferredStartDateTime());
        $writer->writeStringValue('sourceSiteUrl', $this->getSourceSiteUrl());
        $writer->writeStringValue('targetDataLocationCode', $this->getTargetDataLocationCode());
        $writer->writeStringValue('targetOrganizationHost', $this->getTargetOrganizationHost());
        $writer->writeStringValue('targetOrganizationId', $this->getTargetOrganizationId());
        $writer->writeStringValue('targetSiteUrl', $this->getTargetSiteUrl());
        $writer->writeBooleanValue('validateOnly', $this->getValidateOnly());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the preferredLatestStartDateTime property value. The preferred latest start date and time. The system cancels the sharePointMigrationTask if it doesn't start by this time. The value must be greater than the preferredStartDateTime, if present. Optional. Only on OneDrive and SharePoint.
     * @param DateTime|null $value Value to set for the preferredLatestStartDateTime property.
    */
    public function setPreferredLatestStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('preferredLatestStartDateTime', $value);
    }

    /**
     * Sets the preferredStartDateTime property value. The preferred start date and time that allows the sharePointMigrationTask to start at a future time instead of as soon as possible (default). Optional. Only on OneDrive and SharePoint.
     * @param DateTime|null $value Value to set for the preferredStartDateTime property.
    */
    public function setPreferredStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('preferredStartDateTime', $value);
    }

    /**
     * Sets the sourceSiteUrl property value. The SharePoint URL of the source site. Optional. Exactly one of sourceSiteId or sourceUrl must be specified. If both or neither are specified, it's an error. Only on OneDrive and SharePoint.
     * @param string|null $value Value to set for the sourceSiteUrl property.
    */
    public function setSourceSiteUrl(?string $value): void {
        $this->getBackingStore()->set('sourceSiteUrl', $value);
    }

    /**
     * Sets the targetDataLocationCode property value. In Microsoft Entra, this value represents the geographic location (for example, JPN, NAM) of the target organization where the resource must be migrated to ensure data residency and compliance. This property isn't required for single-geo target organizations or when the migration is to the default GEO of a multi-geo target organization. Optional. Only on OneDrive and SharePoint.
     * @param string|null $value Value to set for the targetDataLocationCode property.
    */
    public function setTargetDataLocationCode(?string $value): void {
        $this->getBackingStore()->set('targetDataLocationCode', $value);
    }

    /**
     * Sets the targetOrganizationHost property value. The root, admin, or my site host of the specific multi-geo instance of the target organization where the resource must be migrated to ensure data residency and compliance. This property isn't required for single-geo target organizations or when the migration is to the default GEO of a multi-geo target organization. Optional. Only on OneDrive and SharePoint.
     * @param string|null $value Value to set for the targetOrganizationHost property.
    */
    public function setTargetOrganizationHost(?string $value): void {
        $this->getBackingStore()->set('targetOrganizationHost', $value);
    }

    /**
     * Sets the targetOrganizationId property value. The unique Microsoft Entra company ID of the target organization to which the source resource must be migrated. Only on OneDrive and SharePoint.
     * @param string|null $value Value to set for the targetOrganizationId property.
    */
    public function setTargetOrganizationId(?string $value): void {
        $this->getBackingStore()->set('targetOrganizationId', $value);
    }

    /**
     * Sets the targetSiteUrl property value. The SharePoint URL of the target site. Only on OneDrive and SharePoint.
     * @param string|null $value Value to set for the targetSiteUrl property.
    */
    public function setTargetSiteUrl(?string $value): void {
        $this->getBackingStore()->set('targetSiteUrl', $value);
    }

    /**
     * Sets the validateOnly property value. Indicates whether this task is an actual migration or only a validation. If the parameter is missing, the system treats it as false. The default behavior is a real migration. Optional. Only on OneDrive and SharePoint.
     * @param bool|null $value Value to set for the validateOnly property.
    */
    public function setValidateOnly(?bool $value): void {
        $this->getBackingStore()->set('validateOnly', $value);
    }

}
