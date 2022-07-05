<?php

namespace Microsoft\Graph\Beta\Generated\Models\TenantAdmin;

use Microsoft\Graph\Beta\Generated\Models\TenantAdmin\Sharepoint;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\Windows;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Admin implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AdminReportSettings|null $reportSettings The reportSettings property
    */
    private ?AdminReportSettings $reportSettings = null;
    
    /**
     * @var ServiceAnnouncement|null $serviceAnnouncement A container for service communications resources. Read-only.
    */
    private ?ServiceAnnouncement $serviceAnnouncement = null;
    
    /**
     * @var Sharepoint|null $sharepoint A container for administrative resources to manage tenant-level settings for SharePoint and OneDrive.
    */
    private ?Sharepoint $sharepoint = null;
    
    /**
     * @var Windows|null $windows A container for all Windows Update for Business deployment service functionality. Read-only.
    */
    private ?Windows $windows = null;
    
    /**
     * Instantiates a new Admin and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Admin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Admin {
        return new Admin();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'reportSettings' => function (ParseNode $n) use ($o) { $o->setReportSettings($n->getObjectValue(array(AdminReportSettings::class, 'createFromDiscriminatorValue'))); },
            'serviceAnnouncement' => function (ParseNode $n) use ($o) { $o->setServiceAnnouncement($n->getObjectValue(array(ServiceAnnouncement::class, 'createFromDiscriminatorValue'))); },
            'sharepoint' => function (ParseNode $n) use ($o) { $o->setSharepoint($n->getObjectValue(array(Sharepoint::class, 'createFromDiscriminatorValue'))); },
            'windows' => function (ParseNode $n) use ($o) { $o->setWindows($n->getObjectValue(array(Windows::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the reportSettings property value. The reportSettings property
     * @return AdminReportSettings|null
    */
    public function getReportSettings(): ?AdminReportSettings {
        return $this->reportSettings;
    }

    /**
     * Gets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     * @return ServiceAnnouncement|null
    */
    public function getServiceAnnouncement(): ?ServiceAnnouncement {
        return $this->serviceAnnouncement;
    }

    /**
     * Gets the sharepoint property value. A container for administrative resources to manage tenant-level settings for SharePoint and OneDrive.
     * @return Sharepoint|null
    */
    public function getSharepoint(): ?Sharepoint {
        return $this->sharepoint;
    }

    /**
     * Gets the windows property value. A container for all Windows Update for Business deployment service functionality. Read-only.
     * @return Windows|null
    */
    public function getWindows(): ?Windows {
        return $this->windows;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('reportSettings', $this->reportSettings);
        $writer->writeObjectValue('serviceAnnouncement', $this->serviceAnnouncement);
        $writer->writeObjectValue('sharepoint', $this->sharepoint);
        $writer->writeObjectValue('windows', $this->windows);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the reportSettings property value. The reportSettings property
     *  @param AdminReportSettings|null $value Value to set for the reportSettings property.
    */
    public function setReportSettings(?AdminReportSettings $value ): void {
        $this->reportSettings = $value;
    }

    /**
     * Sets the serviceAnnouncement property value. A container for service communications resources. Read-only.
     *  @param ServiceAnnouncement|null $value Value to set for the serviceAnnouncement property.
    */
    public function setServiceAnnouncement(?ServiceAnnouncement $value ): void {
        $this->serviceAnnouncement = $value;
    }

    /**
     * Sets the sharepoint property value. A container for administrative resources to manage tenant-level settings for SharePoint and OneDrive.
     *  @param Sharepoint|null $value Value to set for the sharepoint property.
    */
    public function setSharepoint(?Sharepoint $value ): void {
        $this->sharepoint = $value;
    }

    /**
     * Sets the windows property value. A container for all Windows Update for Business deployment service functionality. Read-only.
     *  @param Windows|null $value Value to set for the windows property.
    */
    public function setWindows(?Windows $value ): void {
        $this->windows = $value;
    }

}
