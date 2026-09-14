<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcPool extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcPool and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcPool
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcPool {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.cloudPcAgentPool': return new CloudPcAgentPool();
            }
        }
        return new CloudPcPool();
    }

    /**
     * Gets the assignments property value. The collection of assignments that grant user or service principal identities access to this pool.
     * @return array<CloudPcPoolAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcPoolAssignment::class);
            /** @var array<CloudPcPoolAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return CloudPcPoolCapabilityConfiguration|null
    */
    public function getCapabilities(): ?CloudPcPoolCapabilityConfiguration {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof CloudPcPoolCapabilityConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the cloudPcConfiguration property value. The cloudPcConfiguration property
     * @return CloudPcConfiguration|null
    */
    public function getCloudPcConfiguration(): ?CloudPcConfiguration {
        $val = $this->getBackingStore()->get('cloudPcConfiguration');
        if (is_null($val) || $val instanceof CloudPcConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcConfiguration'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the pool was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2026 is 2026-01-01T00:00:00Z. Read-only.
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
     * Gets the description property value. The description of the pool. The maximum length is 512 characters.
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
     * Gets the displayName property value. The display name of the pool. The name is unique across Cloud PC pools in an organization. The maximum length is 60 characters.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([CloudPcPoolAssignment::class, 'createFromDiscriminatorValue'])),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([CloudPcPoolCapabilityConfiguration::class, 'createFromDiscriminatorValue'])),
            'cloudPcConfiguration' => fn(ParseNode $n) => $o->setCloudPcConfiguration($n->getObjectValue([CloudPcConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'networkConfiguration' => fn(ParseNode $n) => $o->setNetworkConfiguration($n->getObjectValue([CloudPcNetworkConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the pool was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2026 is 2026-01-01T00:00:00Z. Read-only.
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
     * Gets the networkConfiguration property value. The networkConfiguration property
     * @return CloudPcNetworkConfiguration|null
    */
    public function getNetworkConfiguration(): ?CloudPcNetworkConfiguration {
        $val = $this->getBackingStore()->get('networkConfiguration');
        if (is_null($val) || $val instanceof CloudPcNetworkConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeObjectValue('capabilities', $this->getCapabilities());
        $writer->writeObjectValue('cloudPcConfiguration', $this->getCloudPcConfiguration());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('networkConfiguration', $this->getNetworkConfiguration());
    }

    /**
     * Sets the assignments property value. The collection of assignments that grant user or service principal identities access to this pool.
     * @param array<CloudPcPoolAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the capabilities property value. The capabilities property
     * @param CloudPcPoolCapabilityConfiguration|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?CloudPcPoolCapabilityConfiguration $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the cloudPcConfiguration property value. The cloudPcConfiguration property
     * @param CloudPcConfiguration|null $value Value to set for the cloudPcConfiguration property.
    */
    public function setCloudPcConfiguration(?CloudPcConfiguration $value): void {
        $this->getBackingStore()->set('cloudPcConfiguration', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the pool was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2026 is 2026-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the pool. The maximum length is 512 characters.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the pool. The name is unique across Cloud PC pools in an organization. The maximum length is 60 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the pool was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2026 is 2026-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the networkConfiguration property value. The networkConfiguration property
     * @param CloudPcNetworkConfiguration|null $value Value to set for the networkConfiguration property.
    */
    public function setNetworkConfiguration(?CloudPcNetworkConfiguration $value): void {
        $this->getBackingStore()->set('networkConfiguration', $value);
    }

}
