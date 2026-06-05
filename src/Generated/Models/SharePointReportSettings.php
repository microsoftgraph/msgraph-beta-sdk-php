<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharePointReportSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointReportSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointReportSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointReportSettings {
        return new SharePointReportSettings();
    }

    /**
     * Gets the apiUsageReportMetrics property value. The collection of API usage report metrics and the status of their enablement.
     * @return array<ApiUsageReportEnablementStatus>|null
    */
    public function getApiUsageReportMetrics(): ?array {
        $val = $this->getBackingStore()->get('apiUsageReportMetrics');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApiUsageReportEnablementStatus::class);
            /** @var array<ApiUsageReportEnablementStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiUsageReportMetrics'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiUsageReportMetrics' => fn(ParseNode $n) => $o->setApiUsageReportMetrics($n->getCollectionOfObjectValues([ApiUsageReportEnablementStatus::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('apiUsageReportMetrics', $this->getApiUsageReportMetrics());
    }

    /**
     * Sets the apiUsageReportMetrics property value. The collection of API usage report metrics and the status of their enablement.
     * @param array<ApiUsageReportEnablementStatus>|null $value Value to set for the apiUsageReportMetrics property.
    */
    public function setApiUsageReportMetrics(?array $value): void {
        $this->getBackingStore()->set('apiUsageReportMetrics', $value);
    }

}
