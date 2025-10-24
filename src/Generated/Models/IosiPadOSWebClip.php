<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for iOS web apps.
*/
class IosiPadOSWebClip extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new IosiPadOSWebClip and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosiPadOSWebClip');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosiPadOSWebClip
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosiPadOSWebClip {
        return new IosiPadOSWebClip();
    }

    /**
     * Gets the appUrl property value. Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
     * @return string|null
    */
    public function getAppUrl(): ?string {
        $val = $this->getBackingStore()->get('appUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUrl' => fn(ParseNode $n) => $o->setAppUrl($n->getStringValue()),
            'fullScreenEnabled' => fn(ParseNode $n) => $o->setFullScreenEnabled($n->getBooleanValue()),
            'ignoreManifestScope' => fn(ParseNode $n) => $o->setIgnoreManifestScope($n->getBooleanValue()),
            'preComposedIconEnabled' => fn(ParseNode $n) => $o->setPreComposedIconEnabled($n->getBooleanValue()),
            'targetApplicationBundleIdentifier' => fn(ParseNode $n) => $o->setTargetApplicationBundleIdentifier($n->getStringValue()),
            'useManagedBrowser' => fn(ParseNode $n) => $o->setUseManagedBrowser($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fullScreenEnabled property value. Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app, such as Safari or the app specified with targetApplicationBundleIdentifier.
     * @return bool|null
    */
    public function getFullScreenEnabled(): ?bool {
        $val = $this->getBackingStore()->get('fullScreenEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullScreenEnabled'");
    }

    /**
     * Gets the ignoreManifestScope property value. Whether or not a full screen web clip can navigate to an external web site without showing the Safari UI. Defaults to false. If FALSE, the Safari UI appears when navigating away. If TRUE, the Safari UI will not be shown.
     * @return bool|null
    */
    public function getIgnoreManifestScope(): ?bool {
        $val = $this->getBackingStore()->get('ignoreManifestScope');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ignoreManifestScope'");
    }

    /**
     * Gets the preComposedIconEnabled property value. Whether or not the icon for the app is precomosed. Defaults to false. If TRUE, prevents SpringBoard from adding 'shine' to the icon. If FALSE, SpringBoard can add 'shine'.
     * @return bool|null
    */
    public function getPreComposedIconEnabled(): ?bool {
        $val = $this->getBackingStore()->get('preComposedIconEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preComposedIconEnabled'");
    }

    /**
     * Gets the targetApplicationBundleIdentifier property value. Specifies the application bundle identifier which opens the URL. Available in iOS 14 and later.
     * @return string|null
    */
    public function getTargetApplicationBundleIdentifier(): ?string {
        $val = $this->getBackingStore()->get('targetApplicationBundleIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetApplicationBundleIdentifier'");
    }

    /**
     * Gets the useManagedBrowser property value. Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
     * @return bool|null
    */
    public function getUseManagedBrowser(): ?bool {
        $val = $this->getBackingStore()->get('useManagedBrowser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useManagedBrowser'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUrl', $this->getAppUrl());
        $writer->writeBooleanValue('fullScreenEnabled', $this->getFullScreenEnabled());
        $writer->writeBooleanValue('ignoreManifestScope', $this->getIgnoreManifestScope());
        $writer->writeBooleanValue('preComposedIconEnabled', $this->getPreComposedIconEnabled());
        $writer->writeStringValue('targetApplicationBundleIdentifier', $this->getTargetApplicationBundleIdentifier());
        $writer->writeBooleanValue('useManagedBrowser', $this->getUseManagedBrowser());
    }

    /**
     * Sets the appUrl property value. Indicates iOS/iPadOS web clip app URL. Example: 'https://www.contoso.com'
     * @param string|null $value Value to set for the appUrl property.
    */
    public function setAppUrl(?string $value): void {
        $this->getBackingStore()->set('appUrl', $value);
    }

    /**
     * Sets the fullScreenEnabled property value. Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app, such as Safari or the app specified with targetApplicationBundleIdentifier.
     * @param bool|null $value Value to set for the fullScreenEnabled property.
    */
    public function setFullScreenEnabled(?bool $value): void {
        $this->getBackingStore()->set('fullScreenEnabled', $value);
    }

    /**
     * Sets the ignoreManifestScope property value. Whether or not a full screen web clip can navigate to an external web site without showing the Safari UI. Defaults to false. If FALSE, the Safari UI appears when navigating away. If TRUE, the Safari UI will not be shown.
     * @param bool|null $value Value to set for the ignoreManifestScope property.
    */
    public function setIgnoreManifestScope(?bool $value): void {
        $this->getBackingStore()->set('ignoreManifestScope', $value);
    }

    /**
     * Sets the preComposedIconEnabled property value. Whether or not the icon for the app is precomosed. Defaults to false. If TRUE, prevents SpringBoard from adding 'shine' to the icon. If FALSE, SpringBoard can add 'shine'.
     * @param bool|null $value Value to set for the preComposedIconEnabled property.
    */
    public function setPreComposedIconEnabled(?bool $value): void {
        $this->getBackingStore()->set('preComposedIconEnabled', $value);
    }

    /**
     * Sets the targetApplicationBundleIdentifier property value. Specifies the application bundle identifier which opens the URL. Available in iOS 14 and later.
     * @param string|null $value Value to set for the targetApplicationBundleIdentifier property.
    */
    public function setTargetApplicationBundleIdentifier(?string $value): void {
        $this->getBackingStore()->set('targetApplicationBundleIdentifier', $value);
    }

    /**
     * Sets the useManagedBrowser property value. Whether or not to use managed browser. When TRUE, the app will be required to be opened in Microsoft Edge. When FALSE, the app will not be required to be opened in Microsoft Edge. By default, this property is set to FALSE.
     * @param bool|null $value Value to set for the useManagedBrowser property.
    */
    public function setUseManagedBrowser(?bool $value): void {
        $this->getBackingStore()->set('useManagedBrowser', $value);
    }

}
