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
     * Gets the allowedArchitectures property value. Indicates the set of CPU architectures on which this application is allowed to be installed. When null, the app is eligible for installation on all the supported architectures. Possible values are: x86, x64, arm64, or a combination of them.
     * @return WindowsArchitecture|null
    */
    public function getAllowedArchitectures(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('allowedArchitectures');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedArchitectures'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedArchitectures' => fn(ParseNode $n) => $o->setAllowedArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'installExperience' => fn(ParseNode $n) => $o->setInstallExperience($n->getObjectValue([WindowsAutoUpdateCatalogAppInstallExperience::class, 'createFromDiscriminatorValue'])),
            'mobileAppCatalogPackageBranchId' => fn(ParseNode $n) => $o->setMobileAppCatalogPackageBranchId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installExperience property value. Describes how the app installer executes on the target device, including the account context (system or user) under which the installer runs and how the device handles restarts after installation completes. When omitted, the service applies default values (runAsAccount = system, deviceRestartBehavior = basedOnReturnCode).
     * @return WindowsAutoUpdateCatalogAppInstallExperience|null
    */
    public function getInstallExperience(): ?WindowsAutoUpdateCatalogAppInstallExperience {
        $val = $this->getBackingStore()->get('installExperience');
        if (is_null($val) || $val instanceof WindowsAutoUpdateCatalogAppInstallExperience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installExperience'");
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
        $writer->writeEnumValue('allowedArchitectures', $this->getAllowedArchitectures());
        $writer->writeObjectValue('installExperience', $this->getInstallExperience());
        $writer->writeStringValue('mobileAppCatalogPackageBranchId', $this->getMobileAppCatalogPackageBranchId());
    }

    /**
     * Sets the allowedArchitectures property value. Indicates the set of CPU architectures on which this application is allowed to be installed. When null, the app is eligible for installation on all the supported architectures. Possible values are: x86, x64, arm64, or a combination of them.
     * @param WindowsArchitecture|null $value Value to set for the allowedArchitectures property.
    */
    public function setAllowedArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('allowedArchitectures', $value);
    }

    /**
     * Sets the installExperience property value. Describes how the app installer executes on the target device, including the account context (system or user) under which the installer runs and how the device handles restarts after installation completes. When omitted, the service applies default values (runAsAccount = system, deviceRestartBehavior = basedOnReturnCode).
     * @param WindowsAutoUpdateCatalogAppInstallExperience|null $value Value to set for the installExperience property.
    */
    public function setInstallExperience(?WindowsAutoUpdateCatalogAppInstallExperience $value): void {
        $this->getBackingStore()->set('installExperience', $value);
    }

    /**
     * Sets the mobileAppCatalogPackageBranchId property value. The identifier of a specific branch in a product, which is a specific subset of product functionality as defined by the publisher . This is run-time resolved to be the latest MobileAppCatalogPackage in the branch. (example:'31a4c766-f23d-8d41-4803-35e155be7389'). Read-Only
     * @param string|null $value Value to set for the mobileAppCatalogPackageBranchId property.
    */
    public function setMobileAppCatalogPackageBranchId(?string $value): void {
        $this->getBackingStore()->set('mobileAppCatalogPackageBranchId', $value);
    }

}
