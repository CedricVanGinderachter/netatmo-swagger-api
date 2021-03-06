#ifndef _SWG_SWGWelcomeApi_H_
#define _SWG_SWGWelcomeApi_H_

#include "SWGHttpRequest.h"

#include <QString>
#include "SWGNADeviceListResponse.h"
#include "SWGNAMeasureResponse.h"
#include "SWGNAUserResponse.h"

#include <QObject>

namespace Swagger {

class SWGWelcomeApi: public QObject {
    Q_OBJECT

public:
    SWGWelcomeApi();
    SWGWelcomeApi(QString host, QString basePath);
    ~SWGWelcomeApi();

    QString host;
    QString basePath;

    void devicelist(QString* accessToken, QString* appType, QString* deviceId, bool getFavorites);
    void getmeasure(QString* accessToken, QString* deviceId, QString* scale, QList<QString*>* type, QString* moduleId, qint32 dateBegin, qint32 dateEnd, qint32 limit, bool optimize, bool realTime);
    void getuser(QString* accessToken);
    
private:
    void devicelistCallback (HttpRequestWorker * worker);
    void getmeasureCallback (HttpRequestWorker * worker);
    void getuserCallback (HttpRequestWorker * worker);
    
signals:
    void devicelistSignal(SWGNADeviceListResponse* summary);
    void getmeasureSignal(SWGNAMeasureResponse* summary);
    void getuserSignal(SWGNAUserResponse* summary);
    
};
}
#endif