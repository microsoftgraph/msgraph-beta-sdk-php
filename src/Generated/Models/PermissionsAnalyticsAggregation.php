<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionsAnalyticsAggregation extends Entity implements Parsable 
{
    /**
     * Instantiates a new PermissionsAnalyticsAggregation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsAnalyticsAggregation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsAnalyticsAggregation {
        return new PermissionsAnalyticsAggregation();
    }

    /**
     * Gets the aws property value. The aws property
     * @return PermissionsAnalytics|null
    */
    public function getAws(): ?PermissionsAnalytics {
        $val = $this->getBackingStore()->get('aws');
        if (is_null($val) || $val instanceof PermissionsAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aws'");
    }

    /**
     * Gets the azure property value. The azure property
     * @return PermissionsAnalytics|null
    */
    public function getAzure(): ?PermissionsAnalytics {
        $val = $this->getBackingStore()->get('azure');
        if (is_null($val) || $val instanceof PermissionsAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azure'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aws' => fn(ParseNode $n) => $o->setAws($n->getObjectValue([PermissionsAnalytics::class, 'createFromDiscriminatorValue'])),
            'azure' => fn(ParseNode $n) => $o->setAzure($n->getObjectValue([PermissionsAnalytics::class, 'createFromDiscriminatorValue'])),
            'gcp' => fn(ParseNode $n) => $o->setGcp($n->getObjectValue([PermissionsAnalytics::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the gcp property value. The gcp property
     * @return PermissionsAnalytics|null
    */
    public function getGcp(): ?PermissionsAnalytics {
        $val = $this->getBackingStore()->get('gcp');
        if (is_null($val) || $val instanceof PermissionsAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gcp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('aws', $this->getAws());
        $writer->writeObjectValue('azure', $this->getAzure());
        $writer->writeObjectValue('gcp', $this->getGcp());
    }

    /**
     * Sets the aws property value. The aws property
     * @param PermissionsAnalytics|null $value Value to set for the aws property.
    */
    public function setAws(?PermissionsAnalytics $value): void {
        $this->getBackingStore()->set('aws', $value);
    }

    /**
     * Sets the azure property value. The azure property
     * @param PermissionsAnalytics|null $value Value to set for the azure property.
    */
    public function setAzure(?PermissionsAnalytics $value): void {
        $this->getBackingStore()->set('azure', $value);
    }

    /**
     * Sets the gcp property value. The gcp property
     * @param PermissionsAnalytics|null $value Value to set for the gcp property.
    */
    public function setGcp(?PermissionsAnalytics $value): void {
        $this->getBackingStore()->set('gcp', $value);
    }

}
