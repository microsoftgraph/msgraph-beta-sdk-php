<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Zone extends Entity implements Parsable 
{
    /**
     * Instantiates a new Zone and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Zone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Zone {
        return new Zone();
    }

    /**
     * Gets the aggregations property value. Environment count summaries by type. Read-only. Supports $filter (eq) on the kind property. For example, $filter=aggregations/any(a: a/kind eq 'azureSubscription').
     * @return array<AggregatedEnvironment>|null
    */
    public function getAggregations(): ?array {
        $val = $this->getBackingStore()->get('aggregations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AggregatedEnvironment::class);
            /** @var array<AggregatedEnvironment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregations'");
    }

    /**
     * Gets the created property value. Creation metadata, including user and timestamp. Supports $orderby (dateTime property only). Supports $filter (ge, le, gt, lt) on the dateTime property. For example, $filter=created/dateTime ge 2023-01-01T00:00:00Z.
     * @return AuditInfo|null
    */
    public function getCreated(): ?AuditInfo {
        $val = $this->getBackingStore()->get('created');
        if (is_null($val) || $val instanceof AuditInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'created'");
    }

    /**
     * Gets the description property value. Optional description of the zone. Up to 255 characters. Supports $filter (eq, contains). For example, $filter=contains(description, 'production').
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
     * Gets the displayName property value. Human-readable name of the zone. Up to 1,024 characters. Supports $filter (eq, contains), and $orderby. For example, $filter=displayName eq 'Production Zone' or $orderby=displayName asc.
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
     * Gets the environments property value. Collection of attached environments. Supports $expand.
     * @return array<Environment>|null
    */
    public function getEnvironments(): ?array {
        $val = $this->getBackingStore()->get('environments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Environment::class);
            /** @var array<Environment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'environments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aggregations' => fn(ParseNode $n) => $o->setAggregations($n->getCollectionOfObjectValues([AggregatedEnvironment::class, 'createFromDiscriminatorValue'])),
            'created' => fn(ParseNode $n) => $o->setCreated($n->getObjectValue([AuditInfo::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'environments' => fn(ParseNode $n) => $o->setEnvironments($n->getCollectionOfObjectValues([Environment::class, 'createFromDiscriminatorValue'])),
            'modified' => fn(ParseNode $n) => $o->setModified($n->getObjectValue([AuditInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modified property value. Last modification metadata, including user and timestamp. Supports $orderby (dateTime property only). Supports $filter (ge, le, gt, lt) on the dateTime property. For example, $orderby=modified/dateTime desc.
     * @return AuditInfo|null
    */
    public function getModified(): ?AuditInfo {
        $val = $this->getBackingStore()->get('modified');
        if (is_null($val) || $val instanceof AuditInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modified'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('aggregations', $this->getAggregations());
        $writer->writeObjectValue('created', $this->getCreated());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('environments', $this->getEnvironments());
        $writer->writeObjectValue('modified', $this->getModified());
    }

    /**
     * Sets the aggregations property value. Environment count summaries by type. Read-only. Supports $filter (eq) on the kind property. For example, $filter=aggregations/any(a: a/kind eq 'azureSubscription').
     * @param array<AggregatedEnvironment>|null $value Value to set for the aggregations property.
    */
    public function setAggregations(?array $value): void {
        $this->getBackingStore()->set('aggregations', $value);
    }

    /**
     * Sets the created property value. Creation metadata, including user and timestamp. Supports $orderby (dateTime property only). Supports $filter (ge, le, gt, lt) on the dateTime property. For example, $filter=created/dateTime ge 2023-01-01T00:00:00Z.
     * @param AuditInfo|null $value Value to set for the created property.
    */
    public function setCreated(?AuditInfo $value): void {
        $this->getBackingStore()->set('created', $value);
    }

    /**
     * Sets the description property value. Optional description of the zone. Up to 255 characters. Supports $filter (eq, contains). For example, $filter=contains(description, 'production').
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Human-readable name of the zone. Up to 1,024 characters. Supports $filter (eq, contains), and $orderby. For example, $filter=displayName eq 'Production Zone' or $orderby=displayName asc.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the environments property value. Collection of attached environments. Supports $expand.
     * @param array<Environment>|null $value Value to set for the environments property.
    */
    public function setEnvironments(?array $value): void {
        $this->getBackingStore()->set('environments', $value);
    }

    /**
     * Sets the modified property value. Last modification metadata, including user and timestamp. Supports $orderby (dateTime property only). Supports $filter (ge, le, gt, lt) on the dateTime property. For example, $orderby=modified/dateTime desc.
     * @param AuditInfo|null $value Value to set for the modified property.
    */
    public function setModified(?AuditInfo $value): void {
        $this->getBackingStore()->set('modified', $value);
    }

}
