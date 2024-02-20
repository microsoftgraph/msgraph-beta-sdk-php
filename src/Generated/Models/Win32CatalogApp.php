<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A mobileApp that is based on a referenced application in a Win32CatalogApp repository
*/
class Win32CatalogApp extends Win32LobApp implements Parsable 
{
    /**
     * Instantiates a new Win32CatalogApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32CatalogApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32CatalogApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32CatalogApp {
        return new Win32CatalogApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mobileAppCatalogPackageId' => fn(ParseNode $n) => $o->setMobileAppCatalogPackageId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mobileAppCatalogPackageId property value. The mobileAppCatalogPackageId property references the mobileAppCatalogPackage entity which contains information about an application catalog package that can be deployed to Intune-managed devices
     * @return string|null
    */
    public function getMobileAppCatalogPackageId(): ?string {
        $val = $this->getBackingStore()->get('mobileAppCatalogPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppCatalogPackageId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mobileAppCatalogPackageId', $this->getMobileAppCatalogPackageId());
    }

    /**
     * Sets the mobileAppCatalogPackageId property value. The mobileAppCatalogPackageId property references the mobileAppCatalogPackage entity which contains information about an application catalog package that can be deployed to Intune-managed devices
     * @param string|null $value Value to set for the mobileAppCatalogPackageId property.
    */
    public function setMobileAppCatalogPackageId(?string $value): void {
        $this->getBackingStore()->set('mobileAppCatalogPackageId', $value);
    }

}
