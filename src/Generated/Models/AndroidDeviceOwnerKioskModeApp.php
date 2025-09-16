<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An application on the Android Device Owner Managed Home Screen
*/
class AndroidDeviceOwnerKioskModeApp extends AndroidDeviceOwnerKioskModeFolderItem implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerKioskModeApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerKioskModeApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerKioskModeApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerKioskModeApp {
        return new AndroidDeviceOwnerKioskModeApp();
    }

    /**
     * Gets the className property value. Class name of application
     * @return string|null
    */
    public function getClassName(): ?string {
        $val = $this->getBackingStore()->get('className');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'className'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'className' => fn(ParseNode $n) => $o->setClassName($n->getStringValue()),
            'offlineAppAccessEnabled' => fn(ParseNode $n) => $o->setOfflineAppAccessEnabled($n->getBooleanValue()),
            'package' => fn(ParseNode $n) => $o->setPackage($n->getStringValue()),
            'preSignInAppAccessEnabled' => fn(ParseNode $n) => $o->setPreSignInAppAccessEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the offlineAppAccessEnabled property value. Indicates whether the application can be used when sign in fails due to network issues in Managed Home Screen. When TRUE, indicates the application can be used when sign in fails due to network issues in Managed Home Screen. When FALSE, indicates the application cannot be used when sign in fails due to network issues in Managed Home Screen. Default value is FALSE.
     * @return bool|null
    */
    public function getOfflineAppAccessEnabled(): ?bool {
        $val = $this->getBackingStore()->get('offlineAppAccessEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offlineAppAccessEnabled'");
    }

    /**
     * Gets the package property value. Package name of application
     * @return string|null
    */
    public function getPackage(): ?string {
        $val = $this->getBackingStore()->get('package');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'package'");
    }

    /**
     * Gets the preSignInAppAccessEnabled property value. Indicates whether the application can be used prior to signing in to the Managed Home Screen. When TRUE, indicates the app can be used prior to sign in for Managed Home Screen. When FALSE, indicates the app cannot be used prior to sign in for Managed Home Screen. Default value is FALSE.
     * @return bool|null
    */
    public function getPreSignInAppAccessEnabled(): ?bool {
        $val = $this->getBackingStore()->get('preSignInAppAccessEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preSignInAppAccessEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('className', $this->getClassName());
        $writer->writeBooleanValue('offlineAppAccessEnabled', $this->getOfflineAppAccessEnabled());
        $writer->writeStringValue('package', $this->getPackage());
        $writer->writeBooleanValue('preSignInAppAccessEnabled', $this->getPreSignInAppAccessEnabled());
    }

    /**
     * Sets the className property value. Class name of application
     * @param string|null $value Value to set for the className property.
    */
    public function setClassName(?string $value): void {
        $this->getBackingStore()->set('className', $value);
    }

    /**
     * Sets the offlineAppAccessEnabled property value. Indicates whether the application can be used when sign in fails due to network issues in Managed Home Screen. When TRUE, indicates the application can be used when sign in fails due to network issues in Managed Home Screen. When FALSE, indicates the application cannot be used when sign in fails due to network issues in Managed Home Screen. Default value is FALSE.
     * @param bool|null $value Value to set for the offlineAppAccessEnabled property.
    */
    public function setOfflineAppAccessEnabled(?bool $value): void {
        $this->getBackingStore()->set('offlineAppAccessEnabled', $value);
    }

    /**
     * Sets the package property value. Package name of application
     * @param string|null $value Value to set for the package property.
    */
    public function setPackage(?string $value): void {
        $this->getBackingStore()->set('package', $value);
    }

    /**
     * Sets the preSignInAppAccessEnabled property value. Indicates whether the application can be used prior to signing in to the Managed Home Screen. When TRUE, indicates the app can be used prior to sign in for Managed Home Screen. When FALSE, indicates the app cannot be used prior to sign in for Managed Home Screen. Default value is FALSE.
     * @param bool|null $value Value to set for the preSignInAppAccessEnabled property.
    */
    public function setPreSignInAppAccessEnabled(?bool $value): void {
        $this->getBackingStore()->set('preSignInAppAccessEnabled', $value);
    }

}
