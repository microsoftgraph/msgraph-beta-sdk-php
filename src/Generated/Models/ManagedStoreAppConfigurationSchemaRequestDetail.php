<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The request parameter for requesting Android Managed Play Store app configuration schema.
*/
class ManagedStoreAppConfigurationSchemaRequestDetail extends AppConfigurationSchemaRequestDetail implements Parsable 
{
    /**
     * Instantiates a new ManagedStoreAppConfigurationSchemaRequestDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedStoreAppConfigurationSchemaRequestDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedStoreAppConfigurationSchemaRequestDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedStoreAppConfigurationSchemaRequestDetail {
        return new ManagedStoreAppConfigurationSchemaRequestDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'packageName' => fn(ParseNode $n) => $o->setPackageName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the packageName property value. The package name of the Android Managed Play Store app
     * @return string|null
    */
    public function getPackageName(): ?string {
        $val = $this->getBackingStore()->get('packageName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('packageName', $this->getPackageName());
    }

    /**
     * Sets the packageName property value. The package name of the Android Managed Play Store app
     * @param string|null $value Value to set for the packageName property.
    */
    public function setPackageName(?string $value): void {
        $this->getBackingStore()->set('packageName', $value);
    }

}
