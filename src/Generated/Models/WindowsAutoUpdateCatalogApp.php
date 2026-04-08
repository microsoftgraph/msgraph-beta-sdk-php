<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A mobileApp that is based on a referenced branch in a Win32CatalogApp repository
*/
class WindowsAutoUpdateCatalogApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new WindowsAutoUpdateCatalogApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAutoUpdateCatalogApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAutoUpdateCatalogApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAutoUpdateCatalogApp {
        return new WindowsAutoUpdateCatalogApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mobileAppCatalogPackageBranchId' => fn(ParseNode $n) => $o->setMobileAppCatalogPackageBranchId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mobileAppCatalogPackageBranchId property value. The identifier of a specific branch in a product, which is a specific subset of product functionality as defined by the publisher . This is run-time resolved to be the latest MobileAppCatalogPackage in the branch. (example:'31a4c766-f23d-8d41-4803-35e155be7389'). Read-Only
     * @return string|null
    */
    public function getMobileAppCatalogPackageBranchId(): ?string {
        $val = $this->getBackingStore()->get('mobileAppCatalogPackageBranchId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppCatalogPackageBranchId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mobileAppCatalogPackageBranchId', $this->getMobileAppCatalogPackageBranchId());
    }

    /**
     * Sets the mobileAppCatalogPackageBranchId property value. The identifier of a specific branch in a product, which is a specific subset of product functionality as defined by the publisher . This is run-time resolved to be the latest MobileAppCatalogPackage in the branch. (example:'31a4c766-f23d-8d41-4803-35e155be7389'). Read-Only
     * @param string|null $value Value to set for the mobileAppCatalogPackageBranchId property.
    */
    public function setMobileAppCatalogPackageBranchId(?string $value): void {
        $this->getBackingStore()->set('mobileAppCatalogPackageBranchId', $value);
    }

}
