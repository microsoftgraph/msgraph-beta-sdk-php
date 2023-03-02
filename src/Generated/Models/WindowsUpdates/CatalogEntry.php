<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CatalogEntry extends Entity implements Parsable 
{
    /**
     * Instantiates a new catalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CatalogEntry {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.driverUpdateCatalogEntry': return new DriverUpdateCatalogEntry();
                case '#microsoft.graph.windowsUpdates.featureUpdateCatalogEntry': return new FeatureUpdateCatalogEntry();
                case '#microsoft.graph.windowsUpdates.qualityUpdateCatalogEntry': return new QualityUpdateCatalogEntry();
                case '#microsoft.graph.windowsUpdates.softwareUpdateCatalogEntry': return new SoftwareUpdateCatalogEntry();
            }
        }
        return new CatalogEntry();
    }

    /**
     * Gets the deployableUntilDateTime property value. The date on which the content is no longer available to deploy using the service. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getDeployableUntilDateTime(): ?DateTime {
        return $this->getBackingStore()->get('deployableUntilDateTime');
    }

    /**
     * Gets the displayName property value. The display name of the content. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deployableUntilDateTime' => fn(ParseNode $n) => $o->setDeployableUntilDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the releaseDateTime property value. The release date for the content. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->getBackingStore()->get('releaseDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deployableUntilDateTime', $this->getDeployableUntilDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
    }

    /**
     * Sets the deployableUntilDateTime property value. The date on which the content is no longer available to deploy using the service. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the deployableUntilDateTime property.
    */
    public function setDeployableUntilDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deployableUntilDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the content. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the releaseDateTime property value. The release date for the content. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

}
