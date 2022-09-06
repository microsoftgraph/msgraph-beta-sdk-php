<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WinGetApp extends MobileApp implements Parsable 
{
    /**
     * @var WinGetAppInstallExperience|null $installExperience The install experience settings associated with this application, which are used to ensure the desired install experiences on the target device are taken into account. This includes the account type (System or User) that actions should be run as on target devices. Required at creation time.
    */
    private ?WinGetAppInstallExperience $installExperience = null;
    
    /**
     * @var string|null $packageIdentifier The PackageIdentifier from the WinGet source repository REST API. This also maps to the Id when using the WinGet client command line application. Required at creation time, cannot be modified on existing objects.
    */
    private ?string $packageIdentifier = null;
    
    /**
     * Instantiates a new WinGetApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.winGetApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WinGetApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WinGetApp {
        return new WinGetApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'installExperience' => function (ParseNode $n) use ($o) { $o->setInstallExperience($n->getObjectValue(array(WinGetAppInstallExperience::class, 'createFromDiscriminatorValue'))); },
            'packageIdentifier' => function (ParseNode $n) use ($o) { $o->setPackageIdentifier($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installExperience property value. The install experience settings associated with this application, which are used to ensure the desired install experiences on the target device are taken into account. This includes the account type (System or User) that actions should be run as on target devices. Required at creation time.
     * @return WinGetAppInstallExperience|null
    */
    public function getInstallExperience(): ?WinGetAppInstallExperience {
        return $this->installExperience;
    }

    /**
     * Gets the packageIdentifier property value. The PackageIdentifier from the WinGet source repository REST API. This also maps to the Id when using the WinGet client command line application. Required at creation time, cannot be modified on existing objects.
     * @return string|null
    */
    public function getPackageIdentifier(): ?string {
        return $this->packageIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('installExperience', $this->installExperience);
        $writer->writeStringValue('packageIdentifier', $this->packageIdentifier);
    }

    /**
     * Sets the installExperience property value. The install experience settings associated with this application, which are used to ensure the desired install experiences on the target device are taken into account. This includes the account type (System or User) that actions should be run as on target devices. Required at creation time.
     *  @param WinGetAppInstallExperience|null $value Value to set for the installExperience property.
    */
    public function setInstallExperience(?WinGetAppInstallExperience $value ): void {
        $this->installExperience = $value;
    }

    /**
     * Sets the packageIdentifier property value. The PackageIdentifier from the WinGet source repository REST API. This also maps to the Id when using the WinGet client command line application. Required at creation time, cannot be modified on existing objects.
     *  @param string|null $value Value to set for the packageIdentifier property.
    */
    public function setPackageIdentifier(?string $value ): void {
        $this->packageIdentifier = $value;
    }

}
